<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
   <div class="login-content">
      <a href="#" class="close">x</a>
      <h3>{{__('message.sign_up')}}</h3>
      <form method="post" action="#">
         <div class="row">
            <label for="username-2">
            {{__('message.Username')}}:
            <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
            </label>
         </div>
         <div class="row">
            <label for="email-2">
            {{__('message.Email_Address')}}:
            <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
            </label>
         </div>
         <div class="row">
            <label for="password-2">
            {{__('message.Password')}}:
            <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
            </label>
         </div>
         <div class="row">
            <label for="repassword-2">
            {{__('message.Confirm_New_Password')}}:
            <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
            </label>
         </div>
         <div class="row">
            <button type="submit">{{__('message.sign_up')}}</button>
         </div>
      </form>
   </div>
</div>
<!--end of signup form popup-->