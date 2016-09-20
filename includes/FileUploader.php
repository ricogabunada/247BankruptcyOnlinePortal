<?php
@define( 'UPLOAD_ERR_OK', 0 );
@define( 'UPLOAD_ERR_INI_SIZE', 1 );
@define( 'UPLOAD_ERR_FORM_SIZE', 2 );
@define( 'UPLOAD_ERR_PARTIAL', 3 );
@define( 'UPLOAD_ERR_NO_FILE', 4 );

class FileUploader {
	function FileUploader( $inputName, $targetPath, $mimeTypes, $maxSize, $newName = '' ) {
		$this->file		= & $_FILES[$inputName];
		$this->path		= $targetPath;
		$this->mimeTypes	= $mimeTypes;
		$this->maxSize		= $maxSize;
		$this->newName		= $newName;
		if ( $newName )	$this->newName .= '.' . substr( strrchr( $this->file['name'], '.' ), 1 );
		$this->errorMessage = '';
	}

	function wasUploaded() {
		return ( $this->file['error'] != UPLOAD_ERR_NO_FILE );
	}

	function save() {
		if ( $this->newName )
			$move = move_uploaded_file( $this->file['tmp_name'], $this->path . $this->newName );
		else
			$move = move_uploaded_file( $this->file['tmp_name'], $this->path . $this->file['name'] );

		if ( $move ) {
			return true;
		} else {
			$this->errorMessage = 'Could not move ' . $this->file['tmp_name'] . ' to ' . $this->path . $this->file['name'];
		}
	}

	function setFileTo( $inputName ) {
		if ( isset( $_FILES[$inputName] ) ) {
			$this->file = & $_FILES[$inputName];
			return true;
		}
		return false;
	}

	function fileExists() {
		if ( $this->newName )
			$filename = $this->newName;
		else
			$filename = $this->file['name'];

		if ( file_exists( $this->path . $filename ) ) {
			$this->errorMessage = "A file with that name already exists on the server ($filename).  Please choose another file or rename the existing one.";
			return true;
		}
		return false;
	}

	function getNameForSQL() {
		if ( $this->newName )
			return addslashes( $this->newName );
		else
			return addslashes( $this->file['name'] );
	}

	function addMimeType( $mimeType ) {
		$this->mimeTypes[] = $mimeType;
	}

	function getError() {
		return $this->errorMessage;
	}

	function isError() {
		return ( $this->fileExists() || $this->errorMessage != '' || $this->file['error'] > 0 );
	}

	function isValid() {

		if ( $this->file['size'] > $this->maxSize || $this->file['error'] == 2 ) {
			$this->errorMessage = 'The filesize of the uploaded file is larger than the maximum ' . round( $this->maxSize / 1024 ) . ' Kilobytes allowed.  Please recompress the file to be smaller or choose another file.';
			return false;
		}

		if ( $this->file['error'] != 0 ) {
			$errorMessages = array(
			1	=>	'The uploaded file exceeds the upload_max_filesize directive in php.in',
			2	=>	'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
			3	=>	'The uploaded file was only partially uploaded',
			4	=>	'No file was uploaded'
			);
			$this->errorMessage = $errorMessages[$this->file['error']];
			return false;
		}
		if ( !in_array( $this->file['type'], $this->mimeTypes ) ) {
			$this->errorMessage = 'The file\'s MIME type <' . $this->file['type'] . '> does not match the allowed types: ' . implode( ', ', $this->mimeTypes );
			return false;
		}
		return true;
	}
}

class ImageUploader extends FileUploader {
	function ImageUploader( $inputName, $targetPath, $maxSize, $maxWidth, $maxHeight, $newName = '' ) {
		$mimeTypes	= array(
			'image/gif',
			'image/jpeg',
			'image/pjpeg',
			'image/png' );
		$this->maxWidth		= $maxWidth;
		$this->maxHeight	= $maxHeight;
		$this->newName		= $newName;
		FileUploader::FileUploader( $inputName, $targetPath, $mimeTypes, $maxSize, $this->newName );
	}

	function isValid() {
		list ( $width, $height ) = getimagesize( $this->file['tmp_name'] );
		if ( $width > $this->maxWidth || $height > $this->maxHeight ) {
			$this->errorMessage = 'The image you chose (' . $width . ' x ' . $height . ') is larger than the maximum allowed dimensions of ' . $this->maxWidth . 'px wide and ' . $this->maxHeight . 'px high. Please resize the image or choose another that fits these dimensions.';
			return false;
		}
		return parent::isValid();
	}
}

class DocumentUploader extends FileUploader {
	function DocumentUploader( $inputName, $targetPath, $maxSize, $newName = '' ) {
		$this->newName		= '';
		$mimeTypes		= array(
			'image/gif',
			'image/jpeg',
			'image/pjpeg',
			'image/png',
			'application/pdf',
			'application/msword',
			'application/vnd.ms-excel',
			'audio/x-wav',
			'video/mpeg',
			'video/ x-msvideo'
			);

		FileUploader::FileUploader( $inputName, $targetPath, $mimeTypes, $maxSize, $newName );
	}

	function isValid() {
		return true;
	}
}
class VideoUploader extends FileUploader {
	function VideoUploader( $inputName, $targetPath, $maxSize, $newName = '' ) {
		$this->newName		= $newName;
		$mimeTypes		= array(
			'video/mpeg',
			'video/x-msvideo',
			'video/mp4',
			'video/quicktime',
			'video/x-ms-wmv'
			);

		FileUploader::FileUploader( $inputName, $targetPath, $mimeTypes, $maxSize, $newName );
	}

	function isValid() {
		return true;
	}
}
?>
