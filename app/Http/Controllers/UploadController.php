<?php
namespace App\Http\Controllers;
use App\Place;
use App\Placefile;
use Illuminate\Http\Request;
class UploadController extends Controller
{
public function uploadForm()
{
return view('place.upload_form');
}
public function uploadSubmit(Request $request)
{
$this->validate($request, [
'gnum11' => 'required',
'photos'=>'required',
]);
if($request->hasFile('photos'))
{
$allowedfileExtension=all();
$files = $request->file('photos');
foreach($files as $file){
$filename1 = $file->getClientOriginalName();
$extension = $file->getClientOriginalExtension();
$check=in_array($extension,$allowedfileExtension);
//dd($check);
if($check)
{
$places = Place::create($request->all());
foreach ($request->photos as $photo) {
$filename1 = $photo->store('photos');
Placefile::create([
'place_id' => $places->id,
'filename1' => $filename1
]);

}
echo "Upload Successfully";
}
else
{
echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
}
return view('place.index');
}
}
}
}?>