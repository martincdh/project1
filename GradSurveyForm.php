<!DOCTYPE html>

<html>
<head>
    <title>BGSU Career Accelerator - Grad Survey</title>
</head>
<body>

    <form action="studentinput.php" method="post">
        <h1> 
            <b>GRAD SURVEY - BGSU Career Accelerator</b>
        </h1>

        <p> <!-- Section that will collect the First name, Last name of the Graduating Senior -->
            FIRST NAME:
            <input type="text" name="first_name" required><br><br>
            LAST NAME:
            <input type="text" name="last_name" required><br><br>
            E-Mail (BGSU):
           <input type="email" name="bgsuemail" required><br><br>
	    MAJOR:
 	   <select name="major" required>
	   <option value="">Select</option>	
           <option value="accounting">Accounting</option>
           <option value="applied_econ">Applied Economics</option>
           <option value="BI_analytics">Business Analytics & Intelligence</option>
           <option value="economics">Economics</option>
           <option value="finance">Finance</option>
           <option value="indiv_bus">Individualized Business</option>
           <option value="IS">Information Systems</option>
           <option value="ISAC">Information Systems Auditing & Control</option>
           <option value="insurance">Insurance Risk Management</option>
           <option value="international_bus">International Business</option>
           <option value="management">Management</option>
           <option value="marketing">Marketing</option>
           <option value="sales">Sales & Services Marketing</option>
           <option value="supply_chain">Supply Chain Management</option>
           </select><br><br>
           ______________________________________________________________________________________
        </p>

        <p> <!-- This section begins the questions for the survey --> 
            <b>1) What was your <b>MAIN</b> reason for obtaining a degree?</b><br><br>
            <input type="radio" name="reason" value="job">To secure a good job<br>
            <input type="radio" name="reason" value="knowledge">To gain knowledge<br>
            <input type="radio" name="reason" value="other">Other (please explain)
            <input type="text" name="reason_other"><br>
            ______________________________________________________________________________________
        </p>

        <p>
            <b>2) Have you secured full-time employment</b> (working 30+ hrs./wk.) <b>after graduation?</b> <br><br>
            <input type="radio" name="job" value="yes">YES >>> Proceed to #3
            <input type="radio" name="job" value="no">NO >>> Proceed #5<br>
            ______________________________________________________________________________________
        </p>

        <p>
            <b>3) Employment Details</b><br><br>

            Company <input type="text" name="company"><br><br>
            Job Title <input type="text" name = "job_title"><br><br>
            City <input type="text" name="city"><br><br>
            State <select name="state">
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
  	<option value="MO">Missouri</option>
  	<option value="MT">Montana</option>
 	 <option value="NE">Nebraska</option>
	 <option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	 <option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	 <option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	 <option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	 <option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
	</select><br><br>	

            Is this job the result of an internship?
            <input type="radio" name="intern" value="yes">YES
            <input type="radio" name="intern" value="no">NO<br/><br/>

            If NOT from internship, how did you secure your job?
            <input type="text" name="secure"><br>
            ______________________________________________________________________________________
        </p>

        <p>
            <b>4) What is your annual salary?</b> <i>(To calculate if not known, multiply hourly rate x 40, then x 52)</i><br /><br />
            $ <input type="text" name="salary"><br><br>
            SIGNING BONUS (if any) $ <input type="text" name="bonus"> >>> Proceed to #7<br>
            ______________________________________________________________________________________
        </p>



        <p>
            <b>5) ALUMNI CAREER ASSISTANCE FOR LIFE: So we can help you in the future...</b><br><br>
            <!-- Require 10 digits --> 
            Preferred Phone: <input type="text" name="phone"><br><br>
            
            <!-- Require @ symbol -->
            Preferred Email (non-BGSU): <input type="email" name="nonbgsuemail"><br>
            ______________________________________________________________________________________
        </p>


        <p>
            <b>6) What are your current plans?</b><br><br>

	    <input type="checkbox" name="curplan1" value="searching">Searching for a job (if interviews pending, how many?):<input type="number" name="interviewpend" min=0 value=0 ><br><br>
	    <input type="checkbox" name="curplan2" value="gradschl">Graduate school (Please provide school name and program): <input type="text" name="gradschlname"><br><br>
	    <input type="checkbox" name="curplan3" value="other">Other (please provide details) <input type="text" name="otherplans"><br>
            ______________________________________________________________________________________
        </p>

        <p>
            <b>7) Did you complete an intership or co-op while at BGSU?</b><br><br>
            <input type="radio" name="internship" value="yes">YES >>> Proceed to #8
            <input type="radio" name="internship" value="no">NO >>> Proceed to #9 <br>
            ______________________________________________________________________________________
        </p>

        <p>
            <b>8) Provide Internship Details in order of completion</b> (for as many that apply to your situation)
           
           <table>
                <tr>
                    <th></th>
                    <th>Internship 1</th>
                    <th>Internship 2</th>
                    <th>Internship 3</th>
                    <th>Internship 4</th>
                    <th>Internship 5</th>
                </tr>
                <tr>
                    <td>Company</td>
                    <td><input type="text" name="company1"></td>
                    <td><input type="text" name="company2"></td>
                    <td><input type="text" name="company3"></td>
                    <td><input type="text" name="company4"></td>
                    <td><input type="text" name="company5"></td>
                </tr>
                <tr>
                    <td>Job Title</td>
                    <td><input type="text" name="job_title1"></td>
                    <td><input type="text" name="job_title2"></td>
                    <td><input type="text" name="job_title3"></td>
                    <td><input type="text" name="job_title4"></td>
                    <td><input type="text" name="job_title5"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city1"></td>
                    <td><input type="text" name="city2"></td>
                    <td><input type="text" name="city3"></td>
                    <td><input type="text" name="city4"></td>
                    <td><input type="text" name="city5"></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><input type="text" name="state1"></td>
                    <td><input type="text" name="state2"></td>
                    <td><input type="text" name="state3"></td>
                    <td><input type="text" name="state4"></td>
                    <td><input type="text" name="state5"></td>
                </tr>
                <tr>
                    <td>Hourly Wage ($)</td>
                    <td><input type="text" name="wage1"></td>
                    <td><input type="text" name="wage2"></td>
                    <td><input type="text" name="wage3"></td>
                    <td><input type="text" name="wage4"></td>
                    <td><input type="text" name="wage5"></td>
                </tr>
            </table><br>
            ______________________________________________________________________________________
        </p>
        <p>
            <b>9) Did you utilize the services of the BUSINESS CAREER ACCELERATOR?</b><br><br>
            <input type="radio" name="bca" value="yes">YES >>>Proceed to #10
            <input type="radio" name="bca" value="no">NO >>>(Survey Complete. Thank You!)<br>
             ______________________________________________________________________________________
        </p>

        <p>
            <b>10) Please rate the services of the BUSINESS CAREER ACCELERATOR</b><br><br>
            1 for the worst / 10 for the best <br><br>

            <input type="radio" name="rating" value="1">1
            <input type="radio" name="rating" value="2">2
            <input type="radio" name="rating" value="3">3
            <input type="radio" name="rating" value="4">4
            <input type="radio" name="rating" value="5">5
            <input type="radio" name="rating" value="6">6
            <input type="radio" name="rating" value="7">7
            <input type="radio" name="rating" value="8">8
            <input type="radio" name="rating" value="9">9
            <input type="radio" name="rating" value="10">10
	<br><br>
            ______________________________________________________________________________________
        </p>

        <p>
            <b>11) Additional feedback (if any)</b><br><br>
            <textarea name="message" rows="5" cols="30"></textarea><br>
            ______________________________________________________________________________________
        </p>

        <p>
            <h2><b>Thank you for completing this survey!</b></h2>
            <input type="submit" value="SUBMIT">
            <input type="reset" value="RESET">
        </p>
    </form>

</body>
</html>