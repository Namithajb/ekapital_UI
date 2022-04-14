<!DOCTYPE html>
<html lang="en">
      <head>
	  	    <title>Interest | UK's cheapest parcel & Courier Worldwide delivery services, best low cost international shipping rates</title>
 		 <?php include 'includes/headerAx.php' ?>
		<?php  include 'includes/include_chat_box.php' ?>
		<?php  include 'includes/google_tag_manager_head.php' ?>
        
	</head>
 	<body>
		<?php include 'includes/google_tag_manager_body.php' ?>
  		<?php include 'includes/menuAx.php' ?>
        </header>
 
	
	<!-- Main Content -->
	<main class="padded20">
      <div class="bg-clr02" >
        <div class="container">
          <ol  class="breadcrumb">
            <li><a href="/homepage.gmp">Home</a></li>
            <li class="active">Interest</li>
          </ol>
        </div>
      </div>
      <div class="container">

        <div class="box-intro text-center">
          <h3 class="heading"> Show Interest for - Direct Business Account</h3>
        </div>

        <p class="text-center lead">Good and Negotiable Rates <br>
          Great discounts for Employees and their family members ! <br>
          Special discount on bigger orders !!</p>

        <div class="row">
          <section class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default01">
              <div class="panel-body">
                <form:form modelAttribute="interest" class="form-horizontal">
					<input type="hidden" name="action" id="action" value="INTEREST"> 

                  <div class="form-group">
                    <div><c:if test="${rolleydata.rolleyError != null}"><span class="pageErrorText"><c:out value="${rolleydata.rolleyError}"/></span></c:if></div>
                    <div class="form-group">
                      <label for="Salutation" class="col-sm-4 control-label">Salutation *<span class="text-danger"></span></label>
                      <div class="col-sm-2"><form:select path="salutation" items="${salutationsList}" class="form-control  input-sm" /><span class="errorText"><form:errors path="salutation" cssClass="errors"/></div>
                    </div>
                    <div class="form-group">
                      <label for="name" class="col-sm-4 control-label">Your Full Name / Company Name *<span class="text-danger"></span></label>
                      <div class="col-sm-6"><form:input path="name" size="30" class="form-control  input-sm"  maxlength="30" /><span class="errorText"><form:errors path="name" cssClass="errors"/></div>
                    </div>
                    <div class="form-group">
                      <label for="userid" class="col-sm-4 control-label">Contact Email id *<span class="text-danger"></span></label>
                      <div class="col-sm-6"><form:input path="userid" size="30" class="form-control  input-sm"  maxlength="50"/><span class="errorText"><form:errors path="userid" cssClass="errors"/></div>
                    </div>
                    <div class="form-group">
                      <label for="userid" class="col-sm-4 control-label">Phone Number<span class="text-danger"></span></label>
                      <div class="col-sm-6"><form:input path="id" size="30" class="form-control  input-sm"  maxlength="50"/><span class="errorText"><form:errors path="id" cssClass="errors"/></div>
                    </div>
                    <div class="form-group">
                      <label for="userid" class="col-sm-4 control-label">Any more info ?<span class="text-danger"></span></label>
                      <div class="col-sm-6"><textarea rows="3" cols="20" name="howheard" id="howheard" class="form-control" placeholder="( Optional ) Any more info that you may share about your company / organization to help us design a better deal for you."></textarea><span class="errorText"><form:errors path="userid" cssClass="errors"/></div>
                    </div>
                    <div class="form-group">
                      <label for="captchaAnswer" class="col-sm-4 control-label">Type the following code *<span class="text-danger"></span><br><small>This is only for us to confirm that you are a human and not a computer !</small></label>
                      <div class="col-sm-6"><img src="<c:url value="/simpleCaptcha.srv" />">&nbsp; </br></br>
                        <form:input path="captchaAnswer" class="form-control  input-sm"  size="30" maxlength="30"/><span class="errorText"><form:errors path="captchaAnswer" cssClass="errors"/></div>
                    </div>


                    <div class="form-group">
                      <div class="col-sm-6 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary btn-login01">Show Interest</button>
                        <button type="button" class="btn btn-default btn-login01">Cancel</button></div>
                    </div>


                  </div>

              </div>
            </div>
            </form:form>
          </section>
        </div>

      </div>

    </main>
	<!-- Main Content -->
 <!-- Footer -->

	<?php  include 'includes/footerAx.php' ?>
  
<!-- Footer - End -->  
</body>
</html>