@extends('layouts.no-navigation')


@section('content')

<article class="about__wrapper" >
		<div class="row" data-ng-controller="GoogleController as vm">
			<h2 class="google__welcome">Welcome Google</h2>
			<form class="google__password" accept-charset="utf-8" name="googleForm" id="googleForm"  data-ng-submit="vm.formSubmit()" class="top-errors">
				 <div class="form-group">
	                  <!-- <label for="password">Password <i class="required">*</i></label> -->
	                  <div class="input-errors" data-ng-messages="googleForm.password.$error" data-ng-if="googleForm.password.$dirty">
	                    <small class="error" data-ng-message="required">Please provide your password</small>
	                  </div>  
	                  <input type="password" name="password" id="password" placeholder="Your Password Please" data-ng-model="vm.formData.password" required>
                </div>
	
				<div class="form-group">
	             	  <div class="input-errors" data-ng-messages="googleForm.fileType.$error" data-ng-if="googleForm.fileType.$dirty">
	                    <small class="error" data-ng-message="required">Please pick a file type</small>
	                  </div>  
	             	 <select data-ng-model="vm.formData.fileType" data-ng-options="file.name for file in vm.fileOptions track by file.id" required name="fileType">
	      				<option value="" selected disabled>Select File Type</option>
	    			</select>
    			</div>

                <div class="form-group">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	                <button class="button__loading" data-ng-disabled="googleForm.$invalid" data-ng-class="{'done' : vm.success, 'loading': vm.loading}" id="googleSubmit">
	                      <div class="progress-spinner white"></div>
	                      <div class="button-text">Download File</div> 
	                </button> 

					<div class="google__error" data-ng-class="{ 'active' : vm.error }">
                  		<p>
                  			<span class="google__error--text">Ah Ah Ah, You didn't say the magic word.</span>
                  			<span class="google__jurassic-error"></span>
                  		</p>
               		</div>

                </div>
			</div>			
		</div>
</article>

@endsection 