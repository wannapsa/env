export a="Hello world"
echo $a

$path = "/opt/app-root/src/";

// Check the existence of file
if(file_exists($path)){
    // Attempt to open the file
    $handle = fopen($path)
	echo "SUCCESS:come across";
} else{
    echo "ERROR: File does not exist.";
}
