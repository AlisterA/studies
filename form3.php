<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link  rel="stylesheet" href="css/style.css"/>
    <title>Форма регистрации</title>
	
  </head>
  <body>
    <form action = "registration.php" method = "POST" enctype="multipart/form-data">  
	  <div class="main">
	    <div class="header">
          <h2>Sign Up</h2>
          <span>It's free and always will be.</span>
	    </div>
     
        <table class="right">
          <tbody>
            <tr>
              <td class="text_right"><label>First Name:</label></td>
              <td><div >
                <input name="first_name" id="first_name" type="text"  class="input_field option1"/>              
		      </div></td>
            </tr>
            <tr>
              <td class="text_right"><label>Last Name:</label></td>
              <td><div>
                  <input name="last_name" type="text" class="input_field option1" /> 
			  </div></td>
            </tr>
            <tr>
              <td class="text_right"><label>Your Email:</label></td>
              <td><div>
                  <input name="email" type="text" class="input_field option1"/>              
		      </div></td>
            </tr>
		    <tr>
              <td class="text_right"><label>Re-enter Email:</label></td>
              <td><div>
                  <input name="re_email" type="text" class="input_field option1"/>              
		      </div></td>
            </tr>
            <tr>
              <td class="text_right"><label>New Password:</label></td>
              <td><div>
                  <input name="password" type="password" class="input_field option1"/>
              
			  </div></td>
            </tr>
            <tr>
              <td class="text_right"><label>I am:</label></td>
              <td><div class="pointer option2">
                <select name="select_sex" class="select_style" style="width: 120px;">
                  <option value="0">Select Sex:</option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
                </select>              
              </div></td>
            </tr>
            <tr>
              <td class="text_right"><label>Birthday:</label></td>
              <td>
			      <div class="pointer1 option2 left">
                    <select name="month" class="select_style" style="width: 89px;">
                      <option value="0" id="month0">Month:</option>
                      <?php
				        $month = array('Jan', "Feb", "Mar", "Apr", "May", "Jun",
				  	    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
				        foreach($month as $val)
					   {
                          echo "<option value=\"{$val}\">{$val}</option>"; 
                        }
				      ?>
                    </select>
				  </div>
				  <div class="pointer2 option2 left">
                    <select name="day" class="select_style" style="width: 74px;">
                      <option value="0" id='day0'>Day:</option>
                      <?php
                        for($day = 1; $day <= 31; $day++)
					    {
                          echo "<option value=\"{$day}\">{$day}</option>"; 
                        }
				      ?>
                    </select>
				  </div>
				  <div class="pointer3 option2 left">
                    <select name="year" class="select_style" style="width: 81px;">
                      <option value="0" id='year0'>Year:</option>
                      <?php
                        for($year = 1920; $year <= 2014; $year++)
				        {
                          echo "<option value=\"{$year}\">{$year}</option>"; 
                        }
				      ?>
                    </select>
				  </div>
				  <div class="clear"></div>             
              </td>
            </tr>
            <tr>
		      <td></td>
		      <td class="option3">Why do I need to privide this?</td>
		    </tr>
		    <tr>
		      <td></td>
			  <td><input type="submit" class="button" value="Sign Up"/></td>
		    </tr>
	      </tbody>
	    </table>
	  </div>
    </form>
  </body>
</html>