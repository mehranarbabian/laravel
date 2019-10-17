<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function processRequest(Request $request) {
  $data= $request->getContent();
$array = json_decode($data,true);
foreach($array as $key => $value) {
  $myfile = fopen("OrderQueue.txt", "w") or die("Unable to open file!");
  fwrite($myfile,  $value);
  fclose($myfile);
}

 }
 public function returnProceccedRequest()
 {

   $myfile = fopen("OrderQueue.txt", "r") or die("Unable to open file!");

  return fread($myfile,filesize("OrderQueue.txt"));
 }
}
?>
