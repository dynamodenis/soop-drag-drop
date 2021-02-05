<!-- decode in the backend controller -->

define('UPLOAD_DIR', './uploads/supplier_products/');
                
               

                   
// print_r(json_decode($batch_img), true);
print_r($batch_img);

$img = $data[9];
$data = base64_decode($img);
$name = uniqid();
$file = UPLOAD_DIR . $name . '.png';
$success = file_put_contents($file, $data);

<!-- base 64 encode in the front end -->

var self = this;
var file = event.target.files[0];
var reader = new FileReader();

reader.onloadend = function() {
    self.batch_image =  reader.result
}

reader.readAsDataURL(file);
