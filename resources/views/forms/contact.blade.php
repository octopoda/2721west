 <div class="contact" data-ng-controller="ContactFormController as vm">

     <form accept-charset="utf-8" name="contactForm" data-ng-submit="vm.formSubmit()" class="top-errors">
            <h1>Say Hello.</h1>
            <p>I am available if you need me for a job, have a great project, or just want to hang out and drink a beer.</p>
            <p>I also love to teach, lecture, or give coding workshops for designers.</p>
            <div class="contact--stable">
                <div class="form-group">
                  <label for="name">Name <i class="required">*</i></label>
                  <div class="input-errors" data-ng-messages="contactForm.name.$error" data-ng-if="contactForm.name.$dirty">
                    <small class="error" data-ng-message="required">Please provide your name</small>
                  </div>  
                  <input type="text" name="name" id="name" placeholder="Your Name Please" placeholder="Your Name Please" data-ng-model="vm.formData.name" required>
                </div>



                

                <div class="form-group">
                  <label for="email">Email <i class="required">*</i></label>
                  <div class="input-errors" data-ng-messages="contactForm.email.$error" data-ng-if="contactForm.email.$dirty">
                    <small class="error" data-ng-message="required">Please provide your email</small>
                    <small class="error" data-ng-message="email">Please provide your a valid email</small>
                  </div>  
                  <input type="email" name="email" id="email" placeholder="Your email Please" placeholder="Your email Please" data-ng-model="vm.formData.email" required>
                </div>


                <div class="form-group">
                    <label for="typeSelect">What would you like to talk about?</label>
                    <select data-ng-model="vm.formData.select" data-ng-options="select.name as select.value for select in vm.formSelectOptions"  id="typeSelect"></select>
                </div>
              
              </div>
              
              <div class="contact--forms" data-ng-switch data-on="vm.formData.select">
              
                   <!-- Hiring -->
                  <div class="contact--hide" id="hire" data-ng-switch-when="hire">
                    <div class="form-group" >
                      <label for="company">Your Company:</label>
                      <input type="text" name="company" id="company" data-ng-model="vm.formData.company">
                    </div>
                    <div class="form-group">
                        <label for="message">Tell me about the position:<i class="required">*</i></label>
                        <div class="input-errors" data-ng-messages="contactForm.message.$error" data-ng-if="contactForm.message.$dirty">
                          <small class="error" data-ng-message="required">What would be my responsibilities?</small>
                        </div>
                        <textarea name="message" id="message" rows="10" data-ng-model="vm.formData.message" required></textarea>
                    </div>
                  </div>



                  <!--Project -->
                  <div class="contact--hide" id="project" data-ng-switch-when="project">
                    <div class="form-group">
                      <label for="projectCompany">Your Company:</label>
                      <input type="text" name="company" id="projectCompany" data-ng-model="vm.formData.company">
                    </div>
                    <div class="form-group">
                      <label for="budget">Your Budget:</label>
                      <div class="input-errors" data-ng-messages="contactForm.budget.$errors" data-ng-if="contactForm.budget.$dirty">   
                        <small class="error" data-ng-message="required">What's your budget?</small>
                      </div>
                      <input type="text" name="budget" id="budget" data-ng-model="vm.formData.budget" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Tell me about the project <i class="required">*</i></label>
                        <div class="input-errors" data-ng-messages="contactForm.message.$error" data-ng-if="contactForm.message.$dirty">
                          <small class="error" data-ng-message="required">What do you need me to design/build?</small>
                        </div>
                        <textarea name="message" id="message" rows="10" data-ng-model="vm.formData.message" required></textarea>
                    </div>
                  </div>


                  <!-- Speaking -->
                  <div class="contact--hide" id="speaking" data-ng-switch-when="speaking">
                    <div class="form-group">
                      <label for="organization">Your organization:</label>
                      <input type="text" name="organization" id="organization" data-ng-model="vm.formData.organization">
                    </div>
                    <div class="form-group">
                        <label for="message">Details about the speaking gig: <i class="required">*</i></label>
                        <div class="input-errors" data-ng-messages="contactForm.message.$error" data-ng-if="contactForm.message.$dirty">
                          <small class="error" data-ng-message="required">What's the event?  What would you like me to speak about?</small>
                        </div>
                        <textarea name="message" id="message"  rows="10" data-ng-model="vm.formData.message" required></textarea>
                    </div>
                  </div>

          
                  <!-- Beer -->
                  <div class="contact--hide" id="beer" data-ng-switch-when="beer">
                    <div class="form-group">
                        <label for="beerMessage">What bar and what time?<i class="required">*</i></label>
                        <div class="input-errors" data-ng-messages="contactForm.message.$error" data-ng-if="contactForm.message.$dirty">
                          <small class="error" data-ng-message="required">I got to know where to meet you. </small>
                        </div>
                        <textarea name="message" id="beerMessage" rows="10" data-ng-model="vm.formData.message" required></textarea>
                    </div>
                  </div>

              </div>
              
              <div class="form-group">
                <button class="button__loading" data-ng-disabled="contactForm.$invalid" data-ng-class="{'done' : vm.success, 'loading': vm.loading}">
                      <div class="progress-spinner white"></div>
                      <div class="button-text">Say Hello</div> 
                </button> 

                <div class="mail__success"  data-ng-class="{ 'active' :  vm.success }">
                  <p>Thanks for contacting me.  I'll get back with you ASAP.</p>
                </div>

                <div class="mail__error" data-ng-class="{ 'active' : vm.error }">
                  <p>Shit! I dropped the ball.  Something&rsquo;s not working now.  Contact me at zack [@] 2721west [dot] com</p>
               </div>

              </div>
    </form>
</div>
