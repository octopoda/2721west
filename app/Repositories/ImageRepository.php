<?php 
	
	namespace twentyseven\Repositories;

	use Storage;
	use Response;

	class ImageRepository {

		/**
		 * Store Image on S3
		 * @param  /twentyseven/request/PostRequest $request 
		 * @param  string $folder  
		 * @param  string $name    
		 * @return string          
		 */
		public function storeImage($request, $folder, $name) {

			if (!$request->hasFile($name))
				return Response::json(['error'=> 'No File Sent']);

			if (!$request->file($name)->isValid())
				return Response::json(['error'=> 'File is not valid']);				

			$file = $request->file($name);
			$filename = $file->getClientOriginalName();

			$file = Storage::disk('s3')->put($folder . '/' . $filename, file_get_contents($file));
		
			return $filename;
		}
		

	}