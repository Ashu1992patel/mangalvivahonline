<script language="JavaScript" type="text/javascript">
function htplace()
		{
		document.form1.ht.value=document.form1.height.options[document.form1.height.selectedIndex].text;
		//alert(document.form1.ht.value);
		true;
		}

function validateFields()
{
	frm=document.form1;		
	//alert(document.form1.gender.value);
	
	if (frm.email.value=="")
	{
		alert("Please enter your E-mail Id!");
		frm.email.focus();
		return false;
	}
	else
	{
		var main_email=frm.email				
		if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(main_email.value))){
		alert('Please Enter a valid Email Address!');
		main_email.focus();
		return false;
		}
	 }
				
	if (frm.password.value==""){
	alert("Please enter your password!");
	frm.password.focus();
	return false;
	}
	else
	{
		var pass =new String(frm.password.value);
		if (pass.length<5){
		alert("Password must have minimum 5 characters");
		frm.password.focus();
		return false;
		}
	}
	
	if (frm.password1.value==""){
	alert("Please enter your confirm password!");
	frm.password1.focus();
	return false;
	}
	else
	{
		var cpass =new String(frm.password1.value);
		if (cpass.length<5){
		alert("Confirmation Password must have minimum 5 characters!");
		frm.password.focus();
		return false;
		}
	}	
	if (frm.password.value!=frm.password1.value){	
		alert("Password confirmation is wrong!");
		frm.password1.focus();
		return false;
	}
	
		
	if (frm.name.value==""){
	alert("Please enter your name!");
	frm.name.focus();
	return false;
	}
	
	if (frm.day.value=="0" || frm.month.value=="0" || frm.year.value=="0"){
	alert("Please enter your age or select your Date of birth!");
	frm.txtage.focus();
	return false;
	}
	
	if (frm.height.value==0){
			alert("Please select your height!");
			frm.height.focus();
			return false;
			}
			
	if ((frm.status[0].checked==false)&&(frm.status[1].checked==false)&&(frm.status[2].checked==false)&&(frm.status[3].checked==false))  {
	alert("Please select your marital status!");
	//frm.status.focus();
	return false;
	}
	
	if((frm.children.value=="1") || (frm.children.value=="2") || (frm.children.value=="3") || (frm.children.value=="4") || (frm.children.value=="Above")){
	//alert(frm.living.value);
	if (frm.living.value==""){
		alert("Please select childrenren living status!");
		return false;
		}
	}
	
	if (frm.religion.value=="0"){
	alert("Please select your religion!");
	frm.religion.focus();
	return false;
	}
	
	if (frm.caste.value=="0"){
			alert("Please Select Caste!");
			frm.caste.focus();
			return false;
			}
			
		if (frm.language.value=="0"){
			alert("Please Select Mother Tongue!");
			frm.language.focus();
			return false;
			}	
				
			if (frm.education.value=="0"){
			alert("Please select Educational detail!");
			frm.education.focus();
			return false;
			}
			
			if (frm.occupation.value=="0"){
			alert("Please select your Occupation!");
			frm.occupation.focus();
			return false;
			}
			
			if (frm.salary.value=="0"){
			alert("Please enter your anual income!");
			frm.salary.focus();
			return false;
			}
			
					
if ((frm.employed_in[0].checked==false)&&(frm.employed_in[1].checked==false)&&(frm.employed_in[2].checked==false)&&(frm.employed_in[3].checked==false)&&(frm.employed_in[4].checked==false)){
	alert("Please select option for employement!");
	//frm.employed_in.focus();
	return false;
	}
	
	if (frm.state.value=="0"){
	alert("Please select your Residing state!");
	frm.state.focus();
	return false;
	}
	
	if (frm.city.value==""){
	alert("Please enter City name!");
	frm.city.focus();
	return false;
	}
	
	if (frm.address.value==""){
	alert("Please enter your permanent Address!");
	frm.address.focus();
	return false;
	}
	
	if (frm.mob.value==""){
	alert("You should mention atleast one contct No.!");
	frm.mob.focus();
	return false;
	}
	
	
}
		
		
function chk4id()
{
	//alert (event.keyCode);
	if ((event.keyCode==9)||(event.keyCode==8)||(event.keyCode==50)||(event.keyCode==46)||(event.keyCode==189)||(event.keyCode==190)||(event.keyCode==110)||(event.keyCode >= 48 && event.keyCode <= 57)||(event.keyCode >= 96 && event.keyCode <= 105)||(event.keyCode >= 65 && event.keyCode <= 90)||(event.keyCode >= 37 && event.keyCode <= 40))
	{ 
		event.returnValue = true;
	}
	else
	{
		event.keyCode=0;
		event.returnValue = false;
	} 
}

function chk4schar()
{
	//alert (event.keyCode);
	if ((event.keyCode >= 33 && event.keyCode <= 42)||(event.keyCode==189)||(event.keyCode==94)||(event.keyCode==45))
	{ 
		event.keyCode=0;
		event.returnValue = false;
	}
	else
	{
		event.returnValue = true;
	} 
}

function chk4pass()
{
	//alert(event.keyCode);
	if ((event.keyCode==222)||(event.keyCode==189)||(event.keyCode==109)||(event.keyCode==32)||(event.keyCode==186))
	{ 
		event.keyCode=0;
		event.returnValue = false;
	}
	else
	{
		//alert(event.keyCode);
		event.returnValue = true;
	} 
}		
		
function chknum()
	{
		if (event.keyCode>=48 && event.keyCode<=57) 
		{ 
		event.returnValue = true;
		}
		else
		{
			event.returnValue = false;
		}
	}

function chkspecialchars(){
		if ((event.keyCode >= 48 && event.keyCode <= 57)||(event.keyCode >= 97 && event.keyCode <= 122)||(event.keyCode >= 65 && event.keyCode <= 90)||(event.keyCode ==95)||(event.keyCode ==32)||(event.keyCode ==46))
		{ 
		event.returnValue = true;
		}
		else
		{
			//alert(event.keyCode);
			event.keyCode=0;
			event.returnValue = false;
		}
	}

function ChkMarriedOption()
{
	if (document.form1.status[0].value=="Never Married")
		{
			document.form1.living[0].disabled=true;
			document.form1.living[1].disabled=true;
			document.form1.children.disabled=true;
		}
		return true;	
}

function childrenenable()
{
			document.form1.living[0].disabled=false;
			document.form1.living[1].disabled=false;
			document.form1.children.disabled=0;
			
		return true;
}	

function setLiving()
{
		if (document.form1.children.value!="None")
		{
			document.form1.living[0].checked=true;
		}
		else
		{
			document.form1.living[0].checked=false;
			document.form1.living[1].checked=false;
		}
		return true;
}	


</script>
<script type="text/JavaScript">




function MM_preloadimages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadimages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

</script>

<tr><td><form action="" method="post" name="form1" id="form1" onsubmit="javascript:return validateFields()">
                      <table width="98%" border="0" align="center" cellpadding="1" cellspacing="1">
                        
                        <tr valign="top">
                          <td height="21" colspan="2"><p class="style12">Update your profile <span class="style13">. </span></p></td>
                        </tr>
                        <tr valign="top">
                          
                          <td width="710" align="left"><p><span class="style14"><strong><?php echo  "<u>".$_SESSION["me"]["name"]."</u> (".$_SESSION["me"]["id"].")"; ?></strong></span></p></td>
                        </tr>
                        <tr valign="top">
                          <td height="26" colspan="2" bgcolor="#9A005A" class="txtmain"><p><span class="onebig"><strong>Account Details</strong> </span> <font color="#CCCCCC">---------------------------------------------------------------------------------------------------------</font></p></td>
                        </tr>
                        <tr valign="top">
                          <td height="30" align="right"><p><strong>E-mail</strong></p></td>
                          <td height="30"><p><strong>
                              <input name="email" type="text" id="email" value="<?php echo $_SESSION["me"]["email"];?>" onkeypress="javascript:return chk4schar();" onkeydown="javascript: return chk4id();" size="28" maxlength="60" />
                              <br />
                              </strong></p></td>
                        </tr>
                        
                        
                        <tr valign="top">
                          <td height="15" colspan="2" align="right">&nbsp;</td>
                        </tr>
                        <tr valign="top">
                          <td height="24" colspan="2" bgcolor="#9A005A"><p><span class="onebig"><strong>Personel Detail </strong></span><font color="#CCCCCC"> ----------------------------------------------------------------------------------------------------------</font></p></td>
                        </tr>
                        
                        <tr valign="top">
                          <td height="24" align="right"><p><span class="style18"><strong>Name</strong></span></p></td>
                          <td height="24"><p><strong>
                              <input name="name" type="text" id="name" size="28" maxlength="30" value="<?php echo $_SESSION["me"]["name"];?>" onkeypress="javascript: return chkspecialchars();" />
                          </strong></p></td>
                        </tr>
                        <tr valign="top">
                          <td height="24" align="right"><p class="style12"><strong>Gender</strong></p></td>
                          <td height="24"><p>
                              <input name="gender" type="radio" class="t1" <?php if ($_SESSION["me"]["gender"]=="male") echo "checked";?> value="male" checked="checked" />
                            Male&nbsp;&nbsp;&nbsp;&nbsp;
                            <input name="gender" type="radio" class="t1" <?php if ($_SESSION["me"]["gender"]=="female") echo "checked";?> value="female" />
                            Female </p></td>
                        </tr>
                        
						
						<tr>
						<?php
							$dob_date= date_create($_SESSION["me"]["dob"]);
						?>
                          <td height="30" align="right" valign="top"><p class="style12"><strong>D.O.B.</strong></p></td>
                          <td height="30" align="left" valign="top"><p><font 
            color="#000000" size="1" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma">
                              
                              <select name="day" id="day" required>
                                <option value="<?php echo date_format($dob_date,"d"); ?>" selected="selected"><?php echo date_format($dob_date,"d"); ?></option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                              </select>
                              <select name="month" id="month" required>
                                
                                <option value="<?php echo date_format($dob_date,"m"); ?>" selected="selected"><?php echo date_format($dob_date,"M"); ?></option>
                                <option value="01">Jan</option>
								<option value="02">Feb</option>
                                <option value="03">Mar</option>
                                <option value="04">Apr</option>
                                <option value="05">May</option>
                                <option value="06">Jun</option>
                                <option value="07">Jul</option>
                                <option value="08">Aug</option>
                                <option value="09">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                              </select>
                              <select name="year" id="year" required>
                                <option value="<?php echo date_format($dob_date,"Y"); ?>" selected="selected"><?php echo date_format($dob_date,"Y"); ?></option>
                                <option>1940</option>
                                <option>1941</option>
                                <option>1942</option>
                                <option>1943</option>
                                <option>1944</option>
                                <option>1945</option>
                                <option>1946</option>
                                <option>1947</option>
                                <option>1948</option>
                                <option>1949</option>
                                <option>1950</option>
                                <option>1951</option>
                                <option>1952</option>
                                <option>1953</option>
                                <option>1954</option>
                                <option>1955</option>
                                <option>1956</option>
                                <option>1957</option>
                                <option>1958</option>
                                <option>1959</option>
                                <option>1960</option>
                                <option>1961</option>
                                <option>1962</option>
                                <option>1963</option>
                                <option>1964</option>
                                <option>1965</option>
                                <option>1966</option>
                                <option>1967</option>
                                <option>1968</option>
                                <option>1969</option>
                                <option>1970</option>
                                <option>1971</option>
                                <option>1972</option>
                                <option>1973</option>
                                <option>1974</option>
                                <option>1975</option>
                                <option>1976</option>
                                <option>1977</option>
                                <option>1978</option>
                                <option>1979</option>
                                <option>1980</option>
                                <option>1981</option>
                                <option>1982</option>
                                <option>1983</option>
                                <option>1984</option>
                                <option>1985</option>
                                <option>1986</option>
                                <option>1987</option>
                                <option>1988</option>
								<option>1989</option>
								<option>1990</option>
								<option>1991</option>
								<option>1992</option>
								<option>1993</option>
                              </select>
                              <br />
                              
                        </tr>
						
						
						
                        <tr valign="top">
                          <td height="26" align="right"><p class="style18"><strong>Height</strong></p></td>
                          <td height="26"><p>
                            <select style="FONT-SIZE: 8.5pt" id="height" name="height" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                              <option value="<?php echo $_SESSION["me"]["height"];?>" selected="selected"><?php echo $_SESSION["me"]["height"];?></option>
                              <option>3ft.5in-105cm</option>
                              <option>3ft.6in-107cm</option>
                              <option>3ft.7in-110cm</option>
                              <option>3ft.8in-112cm</option>
                              <option>3ft.9in-114cm</option>
                              <option>3ft.10in-117cm</option>
                              <option>3ft.11in-119cm</option>
                              <option>4ft-122cm</option>
                              <option>4ft.1in-124cm</option>
                              <option>4ft.2in-127cm</option>
                              <option>4ft.3in-129cm</option>
                              <option>4ft.4in-132cm</option>
                              <option>4ft.5in-134cm</option>
                              <option>4ft.6in-137cm</option>
                              <option>4ft.7in-139cm</option>
                              <option>4ft.8in-142cm</option>
                              <option>4ft.9in-144cm</option>
                              <option>4ft.10in-147cm</option>
                              <option>4ft.11in-149cm</option>
                              <option>5ft-151cm</option>
                              <option>5ft.1in-154cm</option>
                              <option>5ft.2in-157cm</option>
                              <option>5ft.3in-160cm</option>
                              <option>5ft.4in-162cm</option>
                              <option>5ft.5in-165cm</option>
                              <option>5ft.6in-167cm</option>
                              <option>5ft.7in-170cm</option>
                              <option>5ft.8in-172cm</option>
                              <option>5ft 9in-175cm</option>
                              <option>5ft.10in-177cm</option>
                              <option>5ft.11in-180cm</option>
                              <option>6ft-182cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.2in-187cm</option>
                              <option>6ft.3in-190cm</option>
                              <option>6ft.4in-193cm</option>
                              <option>6ft.5in-196cm</option>
                              <option>6ft.6in-198cm</option>
                              <option>6ft.7in-200cm</option>
                              <option>6ft.8in-203cm</option>
                              <option>6ft.9in-206cm</option>
                              <option>6ft.10in-208cm</option>
                              <option>6ft.11in-211cm</option>
                            </select>
                          </p></td>
                        </tr>
						
                        <tr valign="top">
                          <td height="26" align="right"><p class="style12"><strong>Marital Status</strong></p></td>
                          <td height="26"><table width="100%" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="20"><p>
                                  <input name="status" type="radio" <?php if ($_SESSION["me"]["status"]=="Never married") {echo "checked"; $enable="no";}?> class="t1" onClick="javascript:return ChkMarriedOption();" value="Never married" />Never Married&nbsp;&nbsp;
                                    <input name="status" type="radio" <?php if ($_SESSION["me"]["status"]=="Divorced") {echo "checked"; $enable="yes";}?> class="t1" value="Divorced" onClick="javascript:return childrenenable();" />Divorced&nbsp;&nbsp;
                                    <input name="status" type="radio" <?php if ($_SESSION["me"]["status"]=="Widowed") {echo "checked"; $enable="yes";}?> class="t1" value="Widowed" onClick="javascript:return childrenenable();" />Widowed
                                    &nbsp;
                                    <input name="status" type="radio" class="t1" <?php if ($_SESSION["me"]["status"]=="Separated") {echo "checked"; $enable="yes";}?> value="Separated" onClick="javascript:return childrenenable();" />Separated
                                  </p></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="26" align="right"><p class="style12"><strong>No. of Children</strong></p></td>
                          <td height="26" align="left"><p><strong><font color="#008080"size="2">
                              <select name="children" id="children" onChange="javascript:return setLiving();" <?php if($enable=="no") echo "disabled"; ?> />
                                <option value="<?php echo $_SESSION["me"]["children"];?>" selected="selected"><?php echo $_SESSION["me"]["children"];?></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                              </font></strong>
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Children living:</strong> 
                                  <input type="radio" name="living" value="Living with me" class="t1" <?php if($enable=="no") echo "disabled "; ?>  <?php  if($_SESSION["me"]["living"]=="Living with me") echo "checked";  ?> required/>
                                  Living  with me<span class="style18">&nbsp;&nbsp;
                                  <input type="radio" name="living" value="Not living with me" class="t1" <?php if($enable=="no") echo "disabled "; ?>   <?php  if($_SESSION["me"]["living"]=="Not living with me") echo "checked";  ?> required/>
                                  </span>Not living  with me<span class="style18">&nbsp;&nbsp;</span></p></td>
                        </tr>
                        <tr valign="top">
                          <td height="24" align="right"><p><span class="style18"><strong>Religion</strong></span></p></td>
                          <td height="24"><p>
                              <select name="religion" id="religion">
                                <option selected="selected" value="<?php echo $_SESSION["me"]["religion"];?>"><?php echo $_SESSION["me"]["religion"];?></option>
                                <option>Hindu </option>
                                <option>Sikh </option>
			         <option>Jain </option>
                                <!––   <option>Jain - Digambar </option>  ––>
                               <!––    <option>Jain - Shwetambar </option>  ––>
                                <option>Muslim </option>
				
                                
                                <option>Muslim - Shia </option>
                                <option>Muslim - Sunni </option>
                                <option>Christian </option>
                                <option>Christian - Catholic </option>
                                <option>Christian - Orthodox </option>
                                <option>Christian - Protestant </option>
                                
                                
                                <option>Parsi </option>
                                <option>Buddhist </option>
                              </select>
                          </p></td>
                        </tr>
                        <tr valign="top">
                          <td height="24" align="right"><p><span class="style18"><strong>Caste / Division</strong></span></p></td>
                          <td height="24"><p>
                            <select name="caste" id="caste">
                              <option value="<?php echo $_SESSION["me"]["caste"];?>" selected="selected"><?php echo $_SESSION["me"]["religion"];?></option>
                              <OPTION VALUE = 'Adi Dravida'>Adi Dravida</Option><OPTION VALUE = 'Agarwal'>Agarwal</Option><OPTION VALUE = 'Agnikula Kshatriya'>Agnikula Kshatriya</Option><OPTION VALUE = 'Agri'>Agri</Option><OPTION VALUE = 'Ahom'>Ahom</Option><OPTION VALUE = 'Ambalavasi'>Ambalavasi</Option><OPTION VALUE = 'Arora'>Arora</Option><OPTION VALUE = 'Arunthathiyar'>Arunthathiyar</Option><OPTION VALUE = 'Arya Vysya'>Arya Vysya</Option><OPTION VALUE = 'Baidya'>Baidya</Option><OPTION VALUE = 'Baishnab'>Baishnab</Option><OPTION VALUE = 'Baishya'>Baishya</Option><OPTION VALUE = 'Balija'>Balija</Option><OPTION VALUE = 'Banik'>Banik</Option><OPTION VALUE = 'Baniya'>Baniya</Option><OPTION VALUE = 'Barujibi'>Barujibi</Option><OPTION VALUE = 'Besta'>Besta</Option><OPTION VALUE = 'Bhandari'>Bhandari</Option><OPTION VALUE = 'Bhatia'>Bhatia</Option><OPTION VALUE = 'Bhavasar Kshatriya'>Bhavasar Kshatriya</Option><OPTION VALUE = 'Bhovi'>Bhovi</Option><OPTION VALUE = 'Billava'>Billava</Option><OPTION VALUE = 'Boyer'>Boyer</Option><OPTION VALUE = 'Brahmbatt'>Brahmbatt</Option><OPTION VALUE = 'Brahmin'>Brahmin</Option><OPTION VALUE = 'Brahmin - Anavil'>Brahmin - Anavil</Option><OPTION VALUE = 'Brahmin - Audichya'>Brahmin - Audichya</Option><OPTION VALUE = 'Brahmin - Barendra'>Brahmin - Barendra</Option><OPTION VALUE = 'Brahmin - Bhatt'>Brahmin - Bhatt</Option><OPTION VALUE = 'Brahmin - Bhumihar'>Brahmin - Bhumihar</Option><OPTION VALUE = 'Brahmin - Daivadnya'>Brahmin - Daivadnya</Option><OPTION VALUE = 'Brahmin - Danua'>Brahmin - Danua</Option><OPTION VALUE = 'Brahmin - Deshastha'>Brahmin - Deshastha</Option><OPTION VALUE = 'Brahmin - Dhiman'>Brahmin - Dhiman</Option><OPTION VALUE = 'Brahmin - Dravida'>Brahmin - Dravida</Option><OPTION VALUE = 'Brahmin - Garhwali'>Brahmin - Garhwali</Option><OPTION VALUE = 'Brahmin - Gaur'>Brahmin - Gaur</Option><OPTION VALUE = 'Brahmin - Goswami'>Brahmin - Goswami</Option><OPTION VALUE = 'Brahmin - Gurukkal'>Brahmin - Gurukkal</Option><OPTION VALUE = 'Brahmin - Halua'>Brahmin - Halua</Option><OPTION VALUE = 'Brahmin - Havyaka'>Brahmin - Havyaka</Option><OPTION VALUE = 'Brahmin - Hoysala'>Brahmin - Hoysala</Option><OPTION VALUE = 'Brahmin - Iyengar'>Brahmin - Iyengar</Option><OPTION VALUE = 'Brahmin - Iyer'>Brahmin - Iyer</Option><OPTION VALUE = 'Brahmin - Jhadua'>Brahmin - Jhadua</Option><OPTION VALUE = 'Brahmin - Kanyakubj'>Brahmin - Kanyakubj</Option><OPTION VALUE = 'Brahmin - Karhade'>Brahmin - Karhade</Option><OPTION VALUE = 'Brahmin - Kokanastha'>Brahmin - Kokanastha</Option><OPTION VALUE = 'Brahmin - Kota'>Brahmin - Kota</Option><OPTION VALUE = 'Brahmin - Kulin'>Brahmin - Kulin</Option><OPTION VALUE = 'Brahmin - Kumoani'>Brahmin - Kumoani</Option><OPTION VALUE = 'Brahmin - Madhwa'>Brahmin - Madhwa</Option><OPTION VALUE = 'Brahmin - Maithil'>Brahmin - Maithil</Option><OPTION VALUE = 'Brahmin - Modh'>Brahmin - Modh</Option><OPTION VALUE = 'Brahmin - Mohyal'>Brahmin - Mohyal</Option><OPTION VALUE = 'Brahmin - Nagar'>Brahmin - Nagar</Option><OPTION VALUE = 'Brahmin - Namboodiri'>Brahmin - Namboodiri</Option><OPTION VALUE = 'Brahmin - Niyogi'>Brahmin - Niyogi</Option><OPTION VALUE = 'Brahmin - Panda'>Brahmin - Panda</Option><OPTION VALUE = 'Brahmin - Pareek'>Brahmin - Pareek</Option><OPTION VALUE = 'Brahmin - Pandit'>Brahmin - Pandit</Option><OPTION VALUE = 'Brahmin - Rarhi'>Brahmin - Rarhi</Option><OPTION VALUE = 'Brahmin - Rigvedi'>Brahmin - Rigvedi</Option><OPTION VALUE = 'Brahmin - Rudraj'>Brahmin - Rudraj</Option><OPTION VALUE = 'Brahmin - Sakaldwipi'>Brahmin - Sakaldwipi</Option><OPTION VALUE = 'Brahmin - Sanadya'>Brahmin - Sanadya</Option><OPTION VALUE = 'Brahmin - Sanketi'>Brahmin - Sanketi</Option><OPTION VALUE = 'Brahmin - Saraswat'>Brahmin - Saraswat</Option><OPTION VALUE = 'Brahmin - Saryuparin'>Brahmin - Saryuparin</Option><OPTION VALUE = 'Brahmin - Shivhalli'>Brahmin - Shivhalli</Option><OPTION VALUE = 'Brahmin - Shrimali'>Brahmin - Shrimali</Option><OPTION VALUE = 'Brahmin - Smartha'>Brahmin - Smartha</Option><OPTION VALUE = 'Brahmin - Sri Vishnava'>Brahmin - Sri Vishnava</Option><OPTION VALUE = 'Brahmin - Stanika'>Brahmin - Stanika</Option><OPTION VALUE = 'Brahmin - Tyagi'>Brahmin - Tyagi</Option><OPTION VALUE = 'Brahmin - Vaidiki'>Brahmin - Vaidiki</Option><OPTION VALUE = 'Brahmin - Vyas'>Brahmin - Vyas</Option><OPTION VALUE = 'Chamar'>Chamar</Option><OPTION VALUE = 'Chambhar'>Chambhar</Option><OPTION VALUE = 'Chandravanshi Kahar'>Chandravanshi Kahar</Option><OPTION VALUE = 'Chasa'>Chasa</Option><OPTION VALUE = 'Chaudary'>Chaudary</Option><OPTION VALUE = 'Chaurasia'>Chaurasia</Option><OPTION VALUE = 'Chettiar'>Chettiar</Option><OPTION VALUE = 'Chhetri'>Chhetri</Option><OPTION VALUE = 'Christian - Born Again'>Christian - Born Again</Option><OPTION VALUE = 'Christian - Bretheren'>Christian - Bretheren</Option><OPTION VALUE = 'Christian - Church of South India'>Christian - Church of South India</Option><OPTION VALUE = 'Christian - Evangelist'>Christian - Evangelist</Option><OPTION VALUE = 'Christian - Jacobite'>Christian - Jacobite</Option><OPTION VALUE = 'Christian - Knanaya'>Christian - Knanaya</Option><OPTION VALUE = 'Christian - Knanaya Catholic'>Christian - Knanaya Catholic</Option><OPTION VALUE = 'Christian - Knanaya Jacobite'>Christian - Knanaya Jacobite</Option><OPTION VALUE = 'Christian - Latin Catholic'>Christian - Latin Catholic</Option><OPTION VALUE = 'Christian - Malankara'>Christian - Malankara</Option><OPTION VALUE = 'Christian - Marthoma'>Christian - Marthoma</Option><OPTION VALUE = 'Christian - Others'>Christian - Others</Option><OPTION VALUE = 'Christian - Pentacost'>Christian - Pentacost</Option><OPTION VALUE = 'Christian - Roman Catholic'>Christian - Roman Catholic</Option><OPTION VALUE = 'Christian - Syrian Catholic'>Christian - Syrian Catholic</Option><OPTION VALUE = 'Christian - Syrian Jacobite'>Christian - Syrian Jacobite</Option><OPTION VALUE = 'Christian - Syrian Orthodox'>Christian - Syrian Orthodox</Option><OPTION VALUE = 'Christian - Syro Malabar'>Christian - Syro Malabar</Option><OPTION VALUE = 'Christian - unspecified'>Christian - unspecified</Option><OPTION VALUE = 'CKP'>CKP</Option><OPTION VALUE = 'Coorgi'>Coorgi</Option><OPTION VALUE = 'Devadiga'>Devadiga</Option><OPTION VALUE = 'Devandra Kula Vellalar'>Devandra Kula Vellalar</Option><OPTION VALUE = 'Devang Koshthi'>Devang Koshthi</Option><OPTION VALUE = 'Devanga'>Devanga</Option><OPTION VALUE = 'Dhangar'>Dhangar</Option><OPTION VALUE = 'Dheevara'>Dheevara</Option><OPTION VALUE = 'Dhiman'>Dhiman</Option><OPTION VALUE = 'Dhoba'>Dhoba</Option><OPTION VALUE = 'Dhobi'>Dhobi</Option><OPTION VALUE = 'Ediga'>Ediga</Option><OPTION VALUE = 'Ezhava'>Ezhava</Option><OPTION VALUE = 'Ezhuthachan'>Ezhuthachan</Option><OPTION VALUE = 'Gabit'>Gabit</Option><OPTION VALUE = 'Gandla'>Gandla</Option><OPTION VALUE = 'Ganiga'>Ganiga</Option><OPTION VALUE = 'Garhwali'>Garhwali</Option><OPTION VALUE = 'Gavara'>Gavara</Option><OPTION VALUE = 'Ghumar'>Ghumar</Option><OPTION VALUE = 'Goala'>Goala</Option><OPTION VALUE = 'Goan'>Goan</Option><OPTION VALUE = 'Gond'>Gond</Option><OPTION VALUE = 'Goud'>Goud</Option><OPTION VALUE = 'Gounder'>Gounder</Option><OPTION VALUE = 'Gowda'>Gowda</Option><OPTION VALUE = 'Gudia'>Gudia</Option><OPTION VALUE = 'Gujrati'>Gujrati</Option><OPTION VALUE = 'Gupta'>Gupta</Option><OPTION VALUE = 'Intercaste'>Intercaste</Option><OPTION VALUE = 'Intercaste'>Intercaste</Option><OPTION VALUE = 'Irani'>Irani</Option><OPTION VALUE = 'Jain - Digambar '>Jain - Digambar </Option><OPTION VALUE = 'Jain - Shwetambar  '>Jain - Shwetambar  </Option><OPTION VALUE = 'Jain - Others'>Jain - Others</Option><OPTION VALUE = 'Jaiswal'>Jaiswal</Option><OPTION VALUE = 'Jangam'>Jangam</Option><OPTION VALUE = 'Jat'>Jat</Option><OPTION VALUE = 'Jatav'>Jatav</Option><OPTION VALUE = 'Kadava Patel'>Kadava Patel</Option><OPTION VALUE = 'kahar'>kahar</Option><OPTION VALUE = 'Kaibarta'>Kaibarta</Option><OPTION VALUE = 'Kalar'>Kalar</Option><OPTION VALUE = 'Kalinga'>Kalinga</Option><OPTION VALUE = 'Kalita'>Kalita</Option><OPTION VALUE = 'Kalwar'>Kalwar</Option><OPTION VALUE = 'Kamboj'>Kamboj</Option><OPTION VALUE = 'Kamma'>Kamma</Option><OPTION VALUE = 'Kansari'>Kansari</Option><OPTION VALUE = 'Kapu'>Kapu</Option><OPTION VALUE = 'Karana'>Karana</Option><OPTION VALUE = 'Karmakar'>Karmakar</Option><OPTION VALUE = 'Karuneegar'>Karuneegar</Option><OPTION VALUE = 'Kasar'>Kasar</Option><OPTION VALUE = 'Kashyap'>Kashyap</Option><OPTION VALUE = 'Kayastha'>Kayastha</Option><OPTION VALUE = 'Khandayat'>Khandayat</Option><OPTION VALUE = 'Khandelwal'>Khandelwal</Option><OPTION VALUE = 'Khatri'>Khatri</Option><OPTION VALUE = 'Koli'>Koli</Option><OPTION VALUE = 'Kongu Vellala Gounder'>Kongu Vellala Gounder</Option><OPTION VALUE = 'Konkani'>Konkani</Option><OPTION VALUE = 'Kori'>Kori</Option><OPTION VALUE = 'kostha'>kostha</Option><OPTION VALUE = 'kosthi'>kosthi</Option><OPTION VALUE = 'Kshatriya'>Kshatriya</Option><OPTION VALUE = 'Kudumbi'>Kudumbi</Option><OPTION VALUE = 'Kulal'>Kulal</Option><OPTION VALUE = 'Kulalar'>Kulalar</Option><OPTION VALUE = 'Kulita'>Kulita</Option><OPTION VALUE = 'Kumbhakar'>Kumbhakar</Option><OPTION VALUE = 'Kumbhar'>Kumbhar</Option><OPTION VALUE = 'Kumhar'>Kumhar</Option><OPTION VALUE = 'Kummari'>Kummari</Option><OPTION VALUE = 'Kunbi'>Kunbi</Option><OPTION VALUE = 'Kurmi'>Kurmi</Option><OPTION VALUE = 'Kurmi Kshatriya'>Kurmi Kshatriya</Option><OPTION VALUE = 'Kuruba'>Kuruba</Option><OPTION VALUE = 'Kuruhina Shetty'>Kuruhina Shetty</Option><OPTION VALUE = 'Kurumbar'>Kurumbar</Option><OPTION VALUE = 'Kutchi'>Kutchi</Option><OPTION VALUE = 'Lambadi'>Lambadi</Option><OPTION VALUE = 'Leva patel'>Leva patel</Option><OPTION VALUE = 'Leva patil'>Leva patil</Option><OPTION VALUE = 'Lingayath'>Lingayath</Option><OPTION VALUE = 'Lohana'>Lohana</Option><OPTION VALUE = 'Lubana'>Lubana</Option><OPTION VALUE = 'Madiga'>Madiga</Option><OPTION VALUE = 'Mahajan'>Mahajan</Option><OPTION VALUE = 'Mahar'>Mahar</Option><OPTION VALUE = 'Mahendra'>Mahendra</Option><OPTION VALUE = 'Maheshwari'>Maheshwari</Option><OPTION VALUE = 'Mahishya'>Mahishya</Option><OPTION VALUE = 'Majabi'>Majabi</Option><OPTION VALUE = 'Mala'>Mala</Option><OPTION VALUE = 'Mali'>Mali</Option><OPTION VALUE = 'Malla'>Malla</Option><OPTION VALUE = 'Mangalorean'>Mangalorean</Option><OPTION VALUE = 'Manipuri'>Manipuri</Option><OPTION VALUE = 'Mapila'>Mapila</Option><OPTION VALUE = 'Maratha'>Maratha</Option><OPTION VALUE = 'Maruthuvar'>Maruthuvar</Option><OPTION VALUE = 'Matang'>Matang</Option><OPTION VALUE = 'Meena'>Meena</Option><OPTION VALUE = 'Meenavar'>Meenavar</Option><OPTION VALUE = 'Mehra'>Mehra</Option><OPTION VALUE = 'Meru Darji'>Meru Darji</Option><OPTION VALUE = 'Mochi'>Mochi</Option><OPTION VALUE = 'Modak'>Modak</Option><OPTION VALUE = 'Mogaveera'>Mogaveera</Option><OPTION VALUE = 'Mudaliyar'>Mudaliyar</Option><OPTION VALUE = 'Mudiraj'>Mudiraj</Option><OPTION VALUE = 'Mukkulathor'>Mukkulathor</Option><OPTION VALUE = 'Munnuru Kapu'>Munnuru Kapu</Option><OPTION VALUE = 'Muslim - Ansari'>Muslim - Ansari</Option><OPTION VALUE = 'Muslim - Arain'>Muslim - Arain</Option><OPTION VALUE = 'Muslim - Awan'>Muslim - Awan</Option><OPTION VALUE = 'Muslim - Bohra'>Muslim - Bohra</Option><OPTION VALUE = 'Muslim - Dekkani'>Muslim - Dekkani</Option><OPTION VALUE = 'Muslim - Dudekula'>Muslim - Dudekula</Option><OPTION VALUE = 'Muslim - Hanafi'>Muslim - Hanafi</Option><OPTION VALUE = 'Muslim - Jat'>Muslim - Jat</Option><OPTION VALUE = 'Muslim - Khoja'>Muslim - Khoja</Option><OPTION VALUE = 'Muslim - Lebbai'>Muslim - Lebbai</Option><OPTION VALUE = 'Muslim - Malik'>Muslim - Malik</Option><OPTION VALUE = 'Muslim - Mapila'>Muslim - Mapila</Option><OPTION VALUE = 'Muslim - Maraicar'>Muslim - Maraicar</Option><OPTION VALUE = 'Muslim - Memon'>Muslim - Memon</Option><OPTION VALUE = 'Muslim - Mughal'>Muslim - Mughal</Option><OPTION VALUE = 'Muslim - Others'>Muslim - Others</Option><OPTION VALUE = 'Muslim - Pathan'>Muslim - Pathan</Option><OPTION VALUE = 'Muslim - Qureshi'>Muslim - Qureshi</Option><OPTION VALUE = 'Muslim - Rajput'>Muslim - Rajput</Option><OPTION VALUE = 'Muslim - Rowther'>Muslim - Rowther</Option><OPTION VALUE = 'Muslim - Shafi'>Muslim - Shafi</Option><OPTION VALUE = 'Muslim - Sheikh'>Muslim - Sheikh</Option><OPTION VALUE = 'Muslim - Siddiqui'>Muslim - Siddiqui</Option><OPTION VALUE = 'Muslim - Syed'>Muslim - Syed</Option><OPTION VALUE = 'Muslim - UnSpecified'>Muslim - UnSpecified</Option><OPTION VALUE = 'Muthuraja'>Muthuraja</Option><OPTION VALUE = 'Nadar'>Nadar</Option><OPTION VALUE = 'Nai'>Nai</Option><OPTION VALUE = 'Naicker'>Naicker</Option><OPTION VALUE = 'Naidu'>Naidu</Option><OPTION VALUE = 'Naik'>Naik</Option><OPTION VALUE = 'Nair'>Nair</Option><OPTION VALUE = 'Namosudra'>Namosudra</Option><OPTION VALUE = 'Napit'>Napit</Option><OPTION VALUE = 'Nayaka'>Nayaka</Option><OPTION VALUE = 'Nepali'>Nepali</Option><OPTION VALUE = 'Nhavi'>Nhavi</Option><OPTION VALUE = 'Oswal'>Oswal</Option><OPTION VALUE = 'Other'>Other</Option><OPTION VALUE = 'Padmasali'>Padmasali</Option><OPTION VALUE = 'Pal'>Pal</Option><OPTION VALUE = 'Panchal'>Panchal</Option><OPTION VALUE = 'Panicker'>Panicker</Option><OPTION VALUE = 'Parkava Kulam'>Parkava Kulam</Option><OPTION VALUE = 'Parsi'>Parsi</Option><OPTION VALUE = 'Pasi'>Pasi</Option><OPTION VALUE = 'Patel'>Patel</Option><OPTION VALUE = 'Patnaick'>Patnaick</Option><OPTION VALUE = 'Patra'>Patra</Option><OPTION VALUE = 'Pillai'>Pillai</Option><OPTION VALUE = 'Porwal'>Porwal</Option><OPTION VALUE = 'Prajapati'>Prajapati</Option><OPTION VALUE = 'Rajaka'>Rajaka</Option><OPTION VALUE = 'Rajastani'>Rajastani</Option><OPTION VALUE = 'Rajbonshi'>Rajbonshi</Option><OPTION VALUE = 'Rajput'>Rajput</Option><OPTION VALUE = 'Ramdasia'>Ramdasia</Option><OPTION VALUE = 'Ramgariah'>Ramgariah</Option><OPTION VALUE = 'Ravidasia'>Ravidasia</Option><OPTION VALUE = 'Rawat'>Rawat</Option><OPTION VALUE = 'Reddy'>Reddy</Option><OPTION VALUE = 'Sadgope'>Sadgope</Option><OPTION VALUE = 'Saha'>Saha</Option><OPTION VALUE = 'Sahu'>Sahu</Option><OPTION VALUE = 'Saini'>Saini</Option><OPTION VALUE = 'Saliya'>Saliya</Option><OPTION VALUE = 'SC'>SC</Option><OPTION VALUE = 'Senai Thalaivar'>Senai Thalaivar</Option><OPTION VALUE = 'Settibalija'>Settibalija</Option><OPTION VALUE = 'Shetty'>Shetty</Option><OPTION VALUE = 'Shimpi'>Shimpi</Option><OPTION VALUE = 'Sikh - Ahluwalia'>Sikh - Ahluwalia</Option><OPTION VALUE = 'Sikh - Arora'>Sikh - Arora</Option><OPTION VALUE = 'Sikh - Bhatia'>Sikh - Bhatia</Option><OPTION VALUE = 'Sikh - Ghumar'>Sikh - Ghumar</Option><OPTION VALUE = 'Sikh - Intercaste'>Sikh - Intercaste</Option><OPTION VALUE = 'Sikh - Jat'>Sikh - Jat</Option><OPTION VALUE = 'Sikh - Kamboj'>Sikh - Kamboj</Option><OPTION VALUE = 'Sikh - Khatri'>Sikh - Khatri</Option><OPTION VALUE = 'Sikh - Kshatriya'>Sikh - Kshatriya</Option><OPTION VALUE = 'Sikh - Lubana'>Sikh - Lubana</Option><OPTION VALUE = 'Sikh - Majabi'>Sikh - Majabi</Option><OPTION VALUE = 'Sikh - No Bar'>Sikh - No Bar</Option><OPTION VALUE = 'Sikh - Others'>Sikh - Others</Option><OPTION VALUE = 'Sikh - Rajput'>Sikh - Rajput</Option><OPTION VALUE = 'Sikh - Ramdasia'>Sikh - Ramdasia</Option><OPTION VALUE = 'Sikh - Ramgharia'>Sikh - Ramgharia</Option><OPTION VALUE = 'Sikh - Saini'>Sikh - Saini</Option><OPTION VALUE = 'Sikh - Unspecified'>Sikh - Unspecified</Option><OPTION VALUE = 'Sindhi'>Sindhi</Option><OPTION VALUE = 'Sindhi-Amil'>Sindhi-Amil</Option><OPTION VALUE = 'Sindhi-Baibhand'>Sindhi-Baibhand</Option><OPTION VALUE = 'Sindhi-Bhanusali'>Sindhi-Bhanusali</Option><OPTION VALUE = 'Sindhi-Bhatia'>Sindhi-Bhatia</Option><OPTION VALUE = 'Sindhi-Chhapru'>Sindhi-Chhapru</Option><OPTION VALUE = 'Sindhi-Dadu'>Sindhi-Dadu</Option><OPTION VALUE = 'Sindhi-Hyderabadi'>Sindhi-Hyderabadi</Option><OPTION VALUE = 'Sindhi-Larai'>Sindhi-Larai</Option><OPTION VALUE = 'Sindhi-Larkana'>Sindhi-Larkana</Option><OPTION VALUE = 'Sindhi-Lohana'>Sindhi-Lohana</Option><OPTION VALUE = 'Sindhi-Rohiri'>Sindhi-Rohiri</Option><OPTION VALUE = 'Sindhi-Sahiti'>Sindhi-Sahiti</Option><OPTION VALUE = 'Sindhi-Sakkhar'>Sindhi-Sakkhar</Option><OPTION VALUE = 'Sindhi-Sehwani'>Sindhi-Sehwani</Option><OPTION VALUE = 'Sindhi-Shikarpuri'>Sindhi-Shikarpuri</Option><OPTION VALUE = 'Sindhi-Thatai'>Sindhi-Thatai</Option><OPTION VALUE = 'SKP'>SKP</Option><OPTION VALUE = 'Sonar'>Sonar</Option><OPTION VALUE = 'Soni'>Soni</Option><OPTION VALUE = 'Sourashtra'>Sourashtra</Option><OPTION VALUE = 'ST'>ST</Option><OPTION VALUE = 'Sundhi'>Sundhi</Option><OPTION VALUE = 'Suthar'>Suthar</Option><OPTION VALUE = 'Swakula Sali'>Swakula Sali</Option><OPTION VALUE = 'Tamboli'>Tamboli</Option><OPTION VALUE = 'Tanti'>Tanti</Option><OPTION VALUE = 'Tantubai'>Tantubai</Option><OPTION VALUE = 'Telaga'>Telaga</Option><OPTION VALUE = 'Teli'>Teli</Option><OPTION VALUE = 'Thakkar'>Thakkar</Option><OPTION VALUE = 'Thakur'>Thakur</Option><OPTION VALUE = 'Thigala'>Thigala</Option><OPTION VALUE = 'Thiyya'>Thiyya</Option><OPTION VALUE = 'Tili'>Tili</Option><OPTION VALUE = 'Uppara'>Uppara</Option><OPTION VALUE = 'Vaddera'>Vaddera</Option><OPTION VALUE = 'Vaish'>Vaish</Option><OPTION VALUE = 'Vaishnav'>Vaishnav</Option><OPTION VALUE = 'Vaishnava'>Vaishnava</Option><OPTION VALUE = 'Vaishya'>Vaishya</Option><OPTION VALUE = 'Vaishya Vani'>Vaishya Vani</Option><OPTION VALUE = 'Valmiki'>Valmiki</Option><OPTION VALUE = 'Vania'>Vania</Option><OPTION VALUE = 'Vaniya'>Vaniya</Option><OPTION VALUE = 'Vanjara'>Vanjara</Option><OPTION VALUE = 'Vanjari'>Vanjari</Option><OPTION VALUE = 'Vankar'>Vankar</Option><OPTION VALUE = 'Vannar'>Vannar</Option><OPTION VALUE = 'Vannia Kula Kshatriyar'>Vannia Kula Kshatriyar</Option><OPTION VALUE = 'Veera Saivam'>Veera Saivam</Option><OPTION VALUE = 'Velama'>Velama</Option><OPTION VALUE = 'Vellalar'>Vellalar</Option><OPTION VALUE = 'Veluthedathu Nair'>Veluthedathu Nair</Option><OPTION VALUE = 'Vilakkithala Nair'>Vilakkithala Nair</Option><OPTION VALUE = 'Vishwabrahmin'>Vishwabrahmin</Option><OPTION VALUE = 'Vishwakarma'>Vishwakarma</Option><OPTION VALUE = 'Vokkaliga'>Vokkaliga</Option><OPTION VALUE = 'Vysya'>Vysya</Option><OPTION VALUE = 'Yadav'>Yadav</Option>
                              </select>
                            
                        </tr>
                        <tr valign="top">
                          <td height="24" align="right"><p class="style18"><strong>Sub Caste</strong></p></td>
                          <td height="24"><p><strong>
                            <input name="subcaste" type="text" id="subcaste" value="<?php echo $_SESSION["me"]["subcaste"];?>" size="30" maxlength="30" onkeypress="javascript: return chkspecialchars();" />
                          </strong>(Optional)</p></td>
                        </tr>
                        <tr valign="top">
                          <td height="24" align="right"><p class="style21"><strong>Manglik</strong></p></td>
                          <td height="24"><p><font color="#000000" size="1" face="Verdana," arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma">
                            <input name="manglik" type="radio" value="no" <?php if ($_SESSION["me"]["manglik"]=="no") echo "checked"; ?> />
                            </font> <font color="#000000" arial,="Arial," sans-serif,="sans-serif," tahoma="Tahoma"><span class="style27">No
                              <input name="manglik" type="radio" value="yes" <?php if ($_SESSION["me"]["manglik"]=="yes") echo "checked"; ?> />
                              Yes
							<input name="manglik" type="radio" value="dont know" <?php if ($_SESSION["me"]["manglik"]=="dont know") echo "checked"; ?> />
                              Don't know </span></font></p></td>
                        </tr>
                        <tr valign="top">
                          <td height="24" align="right"><p><span class="style18"><strong>Mother Tongue</strong></span></p></td>
                          <td height="24"><p>
                            <select name="language">
                              <option value="<?php echo $_SESSION["me"]["language"];?>" selected="selected"><?php echo $_SESSION["me"]["language"];?></option>
                              <option>Aka</option>
                              <option>Arabic</option>
                              <option>Assamese</option>
                              <option>Awadhi</option>
                              <option>Bengali</option>
                              <option>Bhojpuri</option>
                              <option>Bhutia</option>
                              <option>Chatlisgarhi</option>
                              <option>Chinese</option>
                              <option>Dogri</option>
                              <option>English</option>
                              <option>French</option>
                              <option>Garhwali</option>
                              <option>Garo</option>
                              <option>Gujarati</option>
                              <option>Haryanvi</option>
                              <option>Hindi</option>
                              <option>Kakbarak</option>
                              <option>Kanauji</option>
                              <option>Kannada</option>
                              <option>Kashmiri</option>
                              <option>Khandesi</option>
                              <option>Khasi</option>
                              <option>Konkani</option>
                              <option>Koshali</option>
                              <option>Kumoani</option>
                              <option>Kutchi</option>
                              <option>Lepcha</option>
                              <option>Magahi</option>
                              <option>Maithili</option>
                              <option>Malay</option>
                              <option>Malayalam</option>
                              <option>Manipuri</option>
                              <option>Marathi</option>
                              <option>Marwari</option>
                              <option>Miji</option>
                              <option>Mizo</option>
                              <option>Monpa</option>
                              <option>Nepali</option>
                              <option>Oriya</option>
                              <option>Persian</option>
                              <option>Punjabi</option>
                              <option>Rajasthani</option>
                              <option>Russian</option>
                              <option>Sanskrit</option>
                              <option>Santhali</option>
                              <option>Sindhi</option>
                              <option>Spanish</option>
                              <option>Swedish</option>
                              <option>Tamil</option>
                              <option>Tagalog</option>
                              <option>Telugu</option>
                              <option>Tulu</option>
                              <option>Urdu</option>
                              <option>Other</option>
                            </select>
                          </p></td>
                        </tr>
						<tr>
                          <td height="77" align="right" valign="top"><p class="style21"><strong>About me</strong></p></td>
                          <td align="left"><p>
                              <textarea name="about_me" cols="30" rows="4" class="forminput" style="margin: 0px; width: 448px; height: 201px;" onkeypress="javascript: return chkspecialchars();"><?php echo $_SESSION["me"]["about_me"];?></textarea>
                              </p></td>
                        </tr>
                        <tr valign="top">
                          <td height="15" align="right">&nbsp;</td>
                          <td height="15">&nbsp;</td>
                        </tr>
                        <tr valign="top">
                          <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Education - Occupational Detail </strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
                          </tr>
                        <tr valign="top">
                          <td align="right"><p><strong>Education</strong></p></td>
                          <td height="24"><p>
                            <select name="education" id="education">
                              <option selected="selected" value="<?php echo $_SESSION["me"]["education"];?>"><?php echo $_SESSION["me"]["education"];?></option>
                              <OPTION VALUE = '10+2/Senior Secondary School'>10+2/Senior Secondary School</Option><OPTION VALUE = 'Bachelors - Arts/ Science/ Commerce/ Others'>Bachelors - Arts/ Science/ Commerce/ Others</Option><OPTION VALUE = 'Bachelors - Engineering/ Computers'>Bachelors - Engineering/ Computers</Option><OPTION VALUE = 'CA'>CA</Option><OPTION VALUE = 'CS'>CS</Option><OPTION VALUE = 'Diploma'>Diploma</Option><OPTION VALUE = 'Higher Secondary/ Secondary'>Higher Secondary/ Secondary</Option><OPTION VALUE = 'ICWA'>ICWA</Option><OPTION VALUE = 'Legal - BL/ ML/ LLB/ LLM/ Others'>Legal - BL/ ML/ LLB/ LLM/ Others</Option><OPTION VALUE = 'Management - BBA/ MBA/ Others'>Management - BBA/ MBA/ Others</Option><OPTION VALUE = 'Masters - Arts/ Science/ Commerce/ Others'>Masters - Arts/ Science/ Commerce/ Others</Option><OPTION VALUE = 'Masters - Engineering/ Computers'>Masters - Engineering/ Computers</Option><OPTION VALUE = 'Medicine - General/ Dental/ Surgeon/ Others'>Medicine - General/ Dental/ Surgeon/ Others</Option><OPTION VALUE = 'Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others'>Medicine - General/ Dental/ Surgeon/Engineering/CA/ Others</Option><OPTION VALUE = 'Others'>Others</Option><OPTION VALUE = 'PhD'>PhD</Option><OPTION VALUE = 'Service - IAS/ IPS/ Others'>Service - IAS/ IPS/ Others</Option>
                            </select>
                          </p></td>
                        </tr>
                        <tr valign="top">
                          <td align="right"><p><strong>Education&nbsp;detail</strong></p></td>
                          <td height="24"><p><font color="#008080" size="2">
                            <input name="education_detail" class="forminput" value="<?php echo $_SESSION["me"]["education_detail"];?>" onkeypress="javascript: return chkspecialchars();" size="30" maxlength="100" />
                            </font><font size="2">(Optional)</font></p></td>
                        </tr>
                        <tr valign="top">
                          <td align="right"><p><strong>Occupation</strong></p></td>
                          <td height="24"><p><strong>
                            <select name="occupation">
                              <option selected="selected" value="<?php echo $_SESSION["me"]["occupation"];?>"><?php echo $_SESSION["me"]["occupation"];?></option>
                              <OPTION VALUE = 'Accounts/Finance Professional '>Accounts/Finance Professional </Option><OPTION VALUE = 'Administrative Professional '>Administrative Professional </Option><OPTION VALUE = 'Advertising / PR Professional '>Advertising / PR Professional </Option><OPTION VALUE = 'Agriculture &amp; Farming Professional '>Agriculture &amp; Farming Professional </Option><OPTION VALUE = 'Air Hostess '>Air Hostess </Option><OPTION VALUE = 'Airforce'>Airforce</Option><OPTION VALUE = 'Airline Professional '>Airline Professional </Option><OPTION VALUE = 'Architect '>Architect </Option><OPTION VALUE = 'Army'>Army</Option><OPTION VALUE = 'Arts &amp; Craftsman '>Arts &amp; Craftsman </Option><OPTION VALUE = 'Auditor '>Auditor </Option><OPTION VALUE = 'Banking Service Professional '>Banking Service Professional </Option><OPTION VALUE = 'Beautician '>Beautician </Option><OPTION VALUE = 'BPO/ Call Centre/ ITES/ Telecalling'>BPO/ Call Centre/ ITES/ Telecalling</Option><OPTION VALUE = 'Business '>Business </Option><OPTION VALUE = 'Chartered Accountant '>Chartered Accountant </Option><OPTION VALUE = 'Central Govt. Service '>Central Govt. Service </Option><OPTION VALUE = 'Clerk '>Clerk </Option><OPTION VALUE = 'Company Secretary '>Company Secretary </Option><OPTION VALUE = 'Consultant '>Consultant </Option><OPTION VALUE = 'Corporate Planning/ Consulting '>Corporate Planning/ Consulting </Option><OPTION VALUE = 'Customer Care Professional '>Customer Care Professional </Option><OPTION VALUE = 'CXO / President, Director, Chairman '>CXO / President, Director, Chairman </Option><OPTION VALUE = 'Dentist '>Dentist </Option><OPTION VALUE = 'dermatologist'>dermatologist</Option><OPTION VALUE = 'Doctor '>Doctor </Option><OPTION VALUE = 'Education Professional '>Education Professional </Option><OPTION VALUE = 'Engineer - Non IT '>Engineer - Non IT </Option><OPTION VALUE = 'Entertainment Professional '>Entertainment Professional </Option><OPTION VALUE = 'Event Management Professional '>Event Management Professional </Option><OPTION VALUE = 'Executive '>Executive </Option><OPTION VALUE = 'Fashion Designer '>Fashion Designer </Option><OPTION VALUE = 'Front Office/ Secretarial Staff/ Export/ Import'>Front Office/ Secretarial Staff/ Export/ Import</Option><OPTION VALUE = 'Govt. Service '>Govt. Service </Option><OPTION VALUE = 'Graphic Designer '>Graphic Designer </Option><OPTION VALUE = 'Hardware Professional '>Hardware Professional </Option><OPTION VALUE = 'Health Care Professional '>Health Care Professional </Option><OPTION VALUE = 'Hotel / Hospitality Professional '>Hotel / Hospitality Professional </Option><OPTION VALUE = 'HR/ Admin/ PM/ IR/ Training '>HR/ Admin/ PM/ IR/ Training </Option><OPTION VALUE = 'IAS/IES/IFS/IPS/Others'>IAS/IES/IFS/IPS/Others</Option><OPTION VALUE = 'Interior Designer '>Interior Designer </Option><OPTION VALUE = 'Journalist '>Journalist </Option><OPTION VALUE = 'Lawyer &amp; Legal Professional '>Lawyer &amp; Legal Professional </Option><OPTION VALUE = 'Logistics/ Purchase/ SCM '>Logistics/ Purchase/ SCM </Option><OPTION VALUE = 'Manager '>Manager </Option><OPTION VALUE = 'Mariner / Merchant Navy '>Mariner / Merchant Navy </Option><OPTION VALUE = 'Marketing Professional '>Marketing Professional </Option><OPTION VALUE = 'Media Professional '>Media Professional </Option><OPTION VALUE = 'Navy'>Navy</Option><OPTION VALUE = 'Not Working'>Not Working</Option><OPTION VALUE = 'Nurse '>Nurse </Option><OPTION VALUE = 'Officer '>Officer </Option><OPTION VALUE = 'Others '>Others </Option><OPTION VALUE = 'Paramedical Professional '>Paramedical Professional </Option><OPTION VALUE = 'Private Service '>Private Service </Option><OPTION VALUE = 'Pilot '>Pilot </Option><OPTION VALUE = 'Production/ Maintenance/ Service Engg. '>Production/ Maintenance/ Service Engg. </Option><OPTION VALUE = 'Professor / Lecturer '>Professor / Lecturer </Option><OPTION VALUE = 'Sales Professional '>Sales Professional </Option><OPTION VALUE = 'Scientist / Researcher '>Scientist / Researcher </Option><OPTION VALUE = 'Social Worker '>Social Worker </Option><OPTION VALUE = 'Software Professional '>Software Professional </Option><OPTION VALUE = 'Sportsman '>Sportsman </Option><OPTION VALUE = 'Supervisors '>Supervisors </Option><OPTION VALUE = 'Teaching / Academician '>Teaching / Academician </Option><OPTION VALUE = 'Technician '>Technician </Option><OPTION VALUE = 'Unemployed'>Unemployed</Option>
                            </select>
                          </strong></p></td>
                        </tr>
                        <tr valign="top">
                          <td align="right"><p><strong>Occupation 
                            detail</strong></p></td>
                          <td height="24"><p>
                            <input name="occupation_detail" class="forminput" value="<?php echo $_SESSION["me"]["occupation_detail"];?>" onkeypress="javascript: return chkspecialchars();" size="30" maxlength="100"/>                             
                            (Optional)</p></td>
                        </tr>
                        <tr valign="top">
                          <td align="right"><p><strong>Salary/Income 
                            Per Year</strong></p></td>
                          <td height="24"><p>
                            <select name="salary">
                              <option value="<?php echo $_SESSION["me"]["salary"];?>" selected="selected"><?php echo $_SESSION["me"]["salary"];?></option>
                              <option>Nill</option>
							  <option>Do not show</option>
                              <option>Under Rs.50,000</option>
                              <option>Rs.50,001 - 1,00,000</option>
                              <option>Rs.1,00,001 - 1,50,000</option>
                              <option>Rs.1,50,001 - 2,00,000</option>
                              <option>Rs.2,00,001 - 2,50,000</option>
                              <option>Rs.2,50,001 - 3,00,000</option>
                              <option>Rs.3,00,001 - 5,00,000</option>
                              <option>Rs.5,00,001 - 7,00,000</option>
                              <option>Rs.7,00,001 - 10,00,000</option>
							  <option>Rs.10,00,001 - 15,00,000</option>
							  <option>Rs.15,00,001 - 20,00,000</option>
							  <option>Rs.20,00,001 - 25,00,000</option>
							  <option>Rs.25,00,001 - 50,00,000</option>
							  <option>Rs.50,00,001 - 75,00,000</option>
							  <option>Rs.75,00,001 - 100,00,000</option>
                              <option>Rs.100,00,001 and above</option>
                              <option>Under $25,000</option>
                              <option>$25,001 - 50,000</option>
                              <option>$50,001 - 75,000</option>
                              <option>$75,001 - 100,000</option>
                              <option>$100,001 - 150,000</option>
                              <option>$150,001 - 200,000</option>
                              <option>$200,001 and above</option>
                            </select>
                          </p></td>
                        </tr>
                        <tr valign="top">
                          <td height="24" align="right"><p class="style12"><strong>Employed in</strong></p></td>
                          <td height="24"><p>
                            <input type="radio" name="employed_in" value="Govt" class="t1" <?php if ($_SESSION["me"]["employed_in"]=="Govt") echo "checked"; ?>/>
                            Government
                            <input type="radio" name="employed_in" value="Private" class="t1" <?php if ($_SESSION["me"]["employed_in"]=="Private") echo "checked"; ?> />
                            Private
                            <input type="radio" name="employed_in" value="Business" class="t1" <?php if ($_SESSION["me"]["employed_in"]=="Business") echo "checked"; ?> />
                            Business
                            <input type="radio" name="employed_in" value="Defence" class="t1" <?php if ($_SESSION["me"]["employed_in"]=="Defence") echo "checked"; ?> />
                            Defence
                            <input type="radio" name="employed_in" value="Not working" class="t1" <?php if ($_SESSION["me"]["employed_in"]=="Not working") echo "checked"; ?> />
                            Not  working</p></td>
                        </tr>
                        <tr>
                          <td align="right">&nbsp;</td>
                          <td align="left">&nbsp;</td>
                        </tr>
						
						
						
						<tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Physical Detail </strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	
	<tr valign="top">
        <td height="30" align="right"><p><strong>Physical Status </strong></p></td>
        <td height="30"><p>
			<input name="physical" type="radio" id="physical" tabindex="0" value="Normal" <?php if ($_SESSION["me"]["physical"]=="Normal") echo "checked"; ?> required/>Normal &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="physical" type="radio" id="physical" tabindex="0" value="Physically challenged" <?php if ($_SESSION["me"]["physical"]=="Physically challenged") echo "checked"; ?> required/>Physically Challanged &nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Blood Group: </strong></p></td>
        <td height="30"><p><strong>
        <select name="blood_group" type="text" id="blood_group" tabindex="0" >
			<option value="<?php echo $_SESSION["me"]["blood_group"];?>" selected="selected"><?php echo $_SESSION["me"]["blood_group"];?></option>
			<option>O+</option>
			<option>A+</option>
			<option>B+</option>
			<option>O-</option>
			<option>A-</option>
			<option>AB+</option>
			<option>B-</option>
			<option>AB-</option>
			<option>A1B+</option>
			<option>A1B-</option>
			<option>A2B+</option>
			<option>A2B-</option>
			<option>A1+</option>
			<option>A1-</option>
			<option>A2+</option>
			<option>A2-</option>
		</select>
           
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Body Type: </strong></p></td>
        <td height="30"><p>
        <input name="body_type" type="radio" id="body_type" tabindex="0" value="Average" <?php if ($_SESSION["me"]["body_type"]=="Average") echo "checked"; ?> required/>Average &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="body_type" type="radio" id="body_type" tabindex="0" value="Athletic" <?php if ($_SESSION["me"]["body_type"]=="Athletic") echo "checked"; ?> required/>Athletic &nbsp;&nbsp;&nbsp;&nbsp;
		<input name="body_type" type="radio" id="body_type" tabindex="0" value="Slim" <?php if ($_SESSION["me"]["body_type"]=="Slim") echo "checked"; ?> required/>Slim &nbsp;&nbsp;&nbsp;&nbsp;
		<input name="body_type" type="radio" id="body_type" tabindex="0" value="Heavy" <?php if ($_SESSION["me"]["body_type"]=="Heavy") echo "checked"; ?> required/>Heavy &nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Weight</strong></p></td>
          <td height="24"><p><strong>
            <input name="weight" type="text" id="weight" value="<?php echo $_SESSION["me"]["weight"];?>" size="10" maxlength="30" onkeypress="javascript: return chkspecialchars();" />
              </strong>(in kg)</p></td>
    </tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>Skin Complexion</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="complexion" name="complexion" >
                <option value="<?php echo $_SESSION["me"]["complexion"];?>" selected="selected"><?php echo $_SESSION["me"]["complexion"];?></option>
                <option>Very fair</option>
                <option>Fair</option>
                <option>Wheatish</option>
                <option>Wheatish Brown</option>
                <option>Brown</option>
				<option>Dark</option>
			</select>
        </p></td>
    </tr>
	
	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
    <tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Socio-Religious Background </strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	
	<tr valign="top">
        <td height="30" align="right"><p><strong>Eating Habits: </strong></p></td>
        <td height="30"><p>
        <input name="diet" type="radio" id="body_type" tabindex="0" value="Vegetarian" <?php if ($_SESSION["me"]["diet"]=="Vegetarian") echo "checked"; ?> required/>Vegetarian &nbsp;&nbsp;&nbsp;&nbsp;
        <input name="diet" type="radio" id="body_type" tabindex="0" value="Non vegetarian" <?php if ($_SESSION["me"]["diet"]=="Non vegetarian") echo "checked"; ?> required/>Non vegetarian &nbsp;&nbsp;&nbsp;&nbsp;
		</td>
	</tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Gotra</strong></p></td>
          <td height="24"><p><strong>
            <input name="gotra" type="text" id="gotra" value="<?php echo $_SESSION["me"]["gotra"];?>" size="15" maxlength="30" onkeypress="javascript: return chkspecialchars();"/>
              </strong></p></td>
    </tr>
	
	<tr>
        <td height="24" align="right"><p class="style18"><strong>Star </strong></p></td>
        <td align="left"><p>
			<select name="star" id="star">
				<option selected="selected" value="<?php echo $_SESSION["me"]["star"];?>"><?php echo $_SESSION["me"]["star"];?></option>
				<option>Anuradha / Anusham / Anizham</option>
				<option>Ardra / Thiruvathira</option>
				<option>Ashlesha / Ayilyam</option>
				<option>Ashwini / Ashwathi</option>
				<option>Bharani</option>
				<option>Chitra / Chitha</option>
				<option>Dhanista / Avittam</option>
				<option>Hastha / Atham</option>
				<option>Jyesta / Kettai</option>
				<option>Krithika / Karthika</option>
				<option>Makha / Magam</option>
				<option>Moolam / Moola</option>
				<option>Mrigasira / Makayiram</option>
				<option>Poorvabadrapada / Puratathi</option>
				<option>Poorvapalguni / Puram / Pubbhe</option>
				<option>Poorvashada / Pooradam</option>
				<option>Punarvasu / Punarpusam</option>
				<option>Pushya / Poosam / Pooyam</option>
				<option>Revathi</option>
				<option>Rohini</option>
				<option>Shatataraka / Sadayam / Satabishek</option>
				<option>Shravan / Thiruvonam</option>
				<option>Swati / Chothi</option>
				<option>Uttarabadrapada / Uthratadhi</option>
				<option>Uttarapalguni / Uthram</option>
				<option>Uttarashada / Uthradam</option>
				<option>Vishaka / Vishakam</option>
			</select>
		</p></td>
    </tr>
	
	<tr>
          <td height="24" align="right"><p class="style18"><strong>Rashi / Moon Sign </strong></p></td>
          <td align="left"><p>
			<select name="rashi" id="rashi" style="font-size:8.5pt">
				<option selected="selected" value="<?php echo $_SESSION["me"]["rashi"];?>"><?php echo $_SESSION["me"]["rashi"];?>
                
				</option><option>Dhanu (Sagittarius) 
                </option><option>Kanya (Virgo) 
                </option><option>Kark (Cancer) 
                </option><option>Kumbh (Aquarius) 
                </option><option>Makar (Capricorn) 
                </option><option>Meen (Pisces) 
                </option><option>Mesh (Aries) 
                </option><option>Mithun (Gemini) 
                </option><option>Simha (Leo) 
                </option><option>Tula (Libra) 
                </option><option>Vrishabh (Taurus) 
                </option><option>Vrishchik (Scorpio) 
                </option>
			</select></p></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Time of Birth</strong></p></td>
          <td height="24"><p><strong>
            <input name="tob" type="text" id="weight" value="<?php echo $_SESSION["me"]["tob"];?>" size="10" maxlength="30" />
              </strong></p></td>
    </tr>

	<tr valign="top">
                          <td height="24" align="right"><p><span class="style18"><strong>Birth Place</strong></span></p></td>
                          <td height="24"><p><strong>
                              <input name="bop" type="text" id="bop" size="28" maxlength="30" value="<?php echo $_SESSION["me"]["bop"];?>" onkeypress="javascript: return chkspecialchars();" />
                          </strong></p></td>
                        </tr>		

	<tr valign="top">
         <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Family  Details </strong><font color="#CCCCCC"> ------------------------------------------------------------------------------------------------------------</font></p></td>
    </tr>
	
<tr valign="top">
        <td height="30" align="right"><p><strong>Family Values </strong></p></td>
        <td height="30"><p><strong>
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Orthodox" <?php if ($_SESSION["me"]["f_values"]=="Orthodox") echo "checked"; ?>/>Orthodox &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Traditional" <?php if ($_SESSION["me"]["f_values"]=="Traditional") echo "checked"; ?>/>Traditional &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Moderate" <?php if ($_SESSION["me"]["f_values"]=="Moderate") echo "checked"; ?>/>Moderate &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Liberal" <?php if ($_SESSION["me"]["f_values"]=="Liberal") echo "checked"; ?>/>Liberal &nbsp;&nbsp;
			<input name="f_values" type="radio" id="f_values" tabindex="0" value="Liberal" <?php if ($_SESSION["me"]["f_values"]=="Not mentioned") echo "checked"; ?>/>Other &nbsp;&nbsp;
			<span>(Optional)</span>
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Family Type </strong></p></td>
        <td height="30"><p><strong>
			<input name="f_type" type="radio" id="f_type" tabindex="0" value="Joint" <?php if ($_SESSION["me"]["f_type"]=="Joint") echo "checked"; ?>/>Joint &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_type" type="radio" id="f_type" tabindex="0" value="Nuclear" <?php if ($_SESSION["me"]["f_type"]=="Nuclear") echo "checked"; ?>/>Nuclear &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_type" type="radio" id="f_type" tabindex="0" value="Other" <?php if ($_SESSION["me"]["f_type"]=="Other") echo "checked"; ?>/>Other &nbsp;&nbsp;
			<input name="f_type" type="radio" id="f_type" tabindex="0" value="Other" <?php if ($_SESSION["me"]["f_type"]=="Not mentioned") echo "checked"; ?>/>Not mentioned &nbsp;&nbsp;
			<span>(Optional)</span>
		</td>
	</tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Family Status </strong></p></td>
        <td height="30"><p><strong>
			<input name="f_status" type="radio" id="f_status" tabindex="0" value="Rich / affulent" <?php if ($_SESSION["me"]["f_status"]=="Rich") echo "checked"; ?>/>Rich &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_status" type="radio" id="f_status" tabindex="0" value="Upper middle class" <?php if ($_SESSION["me"]["f_status"]=="Upper middle class") echo "checked"; ?>/>Upper middle class &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="f_status" type="radio" id="f_status" tabindex="0" value="Middle class" <?php if ($_SESSION["me"]["f_status"]=="Middle class") echo "checked"; ?>/>Middle class &nbsp;&nbsp;
			<input name="f_status" type="radio" id="f_status" tabindex="0" value="Middle class" <?php if ($_SESSION["me"]["f_status"]=="Not mentioned") echo "checked"; ?>/>Other &nbsp;&nbsp;
			<span>(Optional)</span>
		</td>
	</tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>No. of Brothers</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="brothers" name="brothers" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                <option value="0" selected="selected">None</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More than 4</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>No. of Sisters</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="sisters" name="sisters" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                <option value="0" selected="selected">None</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More than 4</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>No. of Brothers Married</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="bro_married" name="bro_married" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                <option value="0" selected="selected">None</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More than 4</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	<tr valign="top">
        <td height="26" align="right"><p class="style18"><strong>No. of Sisters Married</strong></p></td>
        <td height="26"><p>
            <select style="FONT-SIZE: 8.5pt" id="sis_married" name="sis_married" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                <option value="0" selected="selected">None</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>More than 4</option>
			</select><span>(Optional)</span>
        </p></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Father's Occupation</strong></p></td>
          <td height="24"><p><strong>
            <input name="father_occupation" type="text" id="father_occupation" value="<?php echo $_SESSION["me"]["father_occupation"];?>" size="30" maxlength="1000" onkeypress="javascript: return chkspecialchars();"/>
              </strong><span>(Optional)</span></p></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Mother's Occupation</strong></p></td>
          <td height="24"><p><strong>
            <input name="mother_occupation" type="text" id="mother_occupation" value="<?php echo $_SESSION["me"]["mother_occupation"];?>" size="30" maxlength="1000" onkeypress="javascript: return chkspecialchars();"/>
              </strong><span>(Optional)</span></p></td>
    </tr>
	<tr valign="top">
        <td height="24" align="right"><p class="style18"><strong>Ancestral / Family Origin</strong></p></td>
          <td height="24"><p><strong>
            <input name="origin" type="text" id="origin" value="<?php echo $_SESSION["me"]["origin"];?>" size="30" maxlength="30" onkeypress="javascript: return chkspecialchars();"/>
              </strong><span>(Optional)</span></p></td>
    </tr>
	
	<tr>
                          <td height="77" align="right" valign="top"><p class="style21"><strong>About Family</strong></p></td>
                          <td align="left"><p>
                              <textarea name="about_fam" cols="30" rows="4" class="forminput"  style="margin: 0px; width: 448px; height: 201px;" onkeypress="javascript: return chkspecialchars();"><?php echo $_SESSION["me"]["about_fam"];?></textarea>
                              </p></td>
                        </tr>
	
	
	<tr valign="top">
        <td height="15" align="right">&nbsp;</td>
        <td height="15">&nbsp;</td>
    </tr>
	
	
    <tr valign="top">
        <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Partner Preference <span>(Optional)</span></strong><font color="#CCCCCC"> ------------------------------------------------------------------------------</font></p></td>
    </tr>
	<tr>
                                <td align="right"><p class="style18"><strong>Age Between</strong></p></td>
                                <td align="left"><p><font size="1" face="Verdana, Arial, sans-serif, Tahoma">
                                  <select style="WIDTH: 44px" name="p_agefrom">
									<option selected="selected" value="<?php echo $_SESSION["me"]["p_agefrom"];?>"><?php echo $_SESSION["me"]["p_agefrom"];?></option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                    <option>32</option>
                                    <option>33</option>
                                    <option>34</option>
                                    <option>35</option>
                                    <option>36</option>
                                    <option>37</option>
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                    <option>41</option>
                                    <option>42</option>
                                    <option>43</option>
                                    <option>44</option>
                                    <option>45</option>
                                    <option>46</option>
                                    <option>47</option>
                                    <option>48</option>
                                    <option>49</option>
                                    <option>50</option>
                                    <option>51</option>
                                    <option>52</option>
                                    <option>53</option>
                                    <option>54</option>
                                    <option>55</option>
                                    <option>56</option>
                                    <option>57</option>
                                    <option>58</option>
                                    <option>59</option>
                                    <option>60</option>
                                    <option>61</option>
                                    <option>62</option>
                                    <option>63</option>
                                    <option>64</option>
                                    <option>65</option>
                                    <option>66</option>
                                    <option>67</option>
                                    <option>68</option>
                                    <option>69</option>
                                    <option>70</option>
                                  </select>
                                  <font color="#000000" size="1" face="Verdana, Arial, sans-serif, Tahoma">to</font>
                                  <select style="WIDTH: 44px" name="p_ageto">
                                    <option selected="selected" value="<?php echo $_SESSION["me"]["p_ageto"];?>"><?php echo $_SESSION["me"]["p_ageto"];?></option>
									<option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                    <option>32</option>
                                    <option>33</option>
                                    <option>34</option>
                                    <option>35</option>
                                    <option>36</option>
                                    <option>37</option>
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                    <option>41</option>
                                    <option>42</option>
                                    <option>43</option>
                                    <option>44</option>
                                    <option>45</option>
                                    <option>46</option>
                                    <option>47</option>
                                    <option>48</option>
                                    <option>49</option>
                                    <option>50</option>
                                    <option>51</option>
                                    <option>52</option>
                                    <option>53</option>
                                    <option>54</option>
                                    <option>55</option>
                                    <option>56</option>
                                    <option>57</option>
                                    <option>58</option>
                                    <option>59</option>
                                    <option>60</option>
                                    <option>61</option>
                                    <option>62</option>
                                    <option>63</option>
                                    <option>64</option>
                                    <option>65</option>
                                    <option>66</option>
                                    <option>67</option>
                                    <option>68</option>
                                    <option>69</option>
                                    <option>70</option>
                                    <option>71</option>
                                    <option>72</option>
                                    <option>73</option>
                                    <option>74</option>
                                    <option>75</option>
                                    <option>76</option>
                                    <option>77</option>
                                    <option>78</option>
                                    <option>79</option>
                                    <option>80</option>
                                    <option>81</option>
                                    <option>82</option>
                                    <option>83</option>
                                    <option>84</option>
                                    <option>85</option>
                                    <option>86</option>
                                    <option>87</option>
                                    <option>88</option>
                                    <option>89</option>
                                    <option>90</option>
                                  </select>
                                </font></p></td>
    </tr>
	<tr valign="top">
                          <td height="26" align="right"><p class="style12">Marital Status </p></td>
                          <td height="26"><table width="100%" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="20"><p>
                                  <input name="p_status" type="radio" class="t1" onClick="javascript:return ChkMarriedOption();" value="Never married" <?php if ($_SESSION["me"]["p_status"]=="Never married") echo "checked"; ?>/>Never Married&nbsp;&nbsp;
                                    <input name="p_status" type="radio" class="t1" value="Divorced" onClick="javascript:return childrenenable();" <?php if ($_SESSION["me"]["p_status"]=="Divorced") echo "checked"; ?>/>Divorced &nbsp;&nbsp;
                                    <input name="p_status" type="radio" class="t1" value="Widowed" onClick="javascript:return childrenenable();" <?php if ($_SESSION["me"]["p_status"]=="Widowed") echo "checked"; ?>/>Widowed &nbsp;&nbsp;
                                    &nbsp;
                                    <input name="p_status" type="radio" class="t1" value="Separated" onClick="javascript:return childrenenable();" <?php if ($_SESSION["me"]["p_status"]=="Separated") echo "checked"; ?>/>Separated
									<input name="p_status" type="radio" class="t1" value="Widowed" onClick="javascript:return childrenenable();" <?php if ($_SESSION["me"]["p_status"]=="Not mentioned") echo "checked"; ?>/>Not mentioned &nbsp;&nbsp;
                                  </p></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td height="26" align="right"><p class="style12">Has Children</p></td>
                          <td height="26" align="left"><p><strong><font>
                              <input name="p_children" type="radio" class="t1" value="yes" <?php if ($_SESSION["me"]["p_children"]=="yes") echo "checked"; ?>/>Yes&nbsp;&nbsp;
                              <input name="p_children" type="radio" class="t1" value="no" <?php if ($_SESSION["me"]["p_children"]=="no") echo "checked"; ?>/>No
							  <input name="p_children" type="radio" class="t1" value="no" <?php if ($_SESSION["me"]["p_children"]=="Not mentioned") echo "checked"; ?>/>Not mentioned
                              </font></strong>
                                  </p></td>
                        </tr>
						<tr valign="top">
                          <td height="26" align="right"><p class="style18">Height</p></td>
                          <td height="26"><p>
                            <select style="FONT-SIZE: 8.5pt" id="height" name="p_heightfrom" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                              <option  selected="selected" value="<?php echo $_SESSION["me"]["p_heightfrom"];?>"><?php echo $_SESSION["me"]["p_heightfrom"];?></option>
                              <option>3ft.5in-105cm</option>
                              <option>3ft.6in-107cm</option>
                              <option>3ft.7in-110cm</option>
                              <option>3ft.8in-112cm</option>
                              <option>3ft.9in-114cm</option>
                              <option>3ft.10in-117cm</option>
                              <option>3ft.11in-119cm</option>
                              <option>4ft-122cm</option>
                              <option>4ft.1in-124cm</option>
                              <option>4ft.2in-127cm</option>
                              <option>4ft.3in-129cm</option>
                              <option>4ft.4in-132cm</option>
                              <option>4ft.5in-134cm</option>
                              <option>4ft.6in-137cm</option>
                              <option>4ft.7in-139cm</option>
                              <option>4ft.8in-142cm</option>
                              <option>4ft.9in-144cm</option>
                              <option>4ft.10in-147cm</option>
                              <option>4ft.11in-149cm</option>
                              <option>5ft-151cm</option>
                              <option>5ft.1in-154cm</option>
                              <option>5ft.2in-157cm</option>
                              <option>5ft.3in-160cm</option>
                              <option>5ft.4in-162cm</option>
                              <option>5ft.5in-165cm</option>
                              <option>5ft.6in-167cm</option>
                              <option>5ft.7in-170cm</option>
                              <option>5ft.8in-172cm</option>
                              <option>5ft 9in-175cm</option>
                              <option>5ft.10in-177cm</option>
                              <option>5ft.11in-180cm</option>
                              <option>6ft-182cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.2in-187cm</option>
                              <option>6ft.3in-190cm</option>
                              <option>6ft.4in-193cm</option>
                              <option>6ft.5in-196cm</option>
                              <option>6ft.6in-198cm</option>
                              <option>6ft.7in-200cm</option>
                              <option>6ft.8in-203cm</option>
                              <option>6ft.9in-206cm</option>
                              <option>6ft.10in-208cm</option>
                              <option>6ft.11in-211cm</option>
                            </select>
							<font color="#000000" size="1" face="Verdana, Arial, sans-serif, Tahoma">to</font>
							<select style="FONT-SIZE: 8.5pt" id="height" name="p_heightto" onchange="javascript:return htplace()" onblur="javascript:return htplace()">
                              <option  selected="selected" value="<?php echo $_SESSION["me"]["p_heightto"];?>"><?php echo $_SESSION["me"]["p_heightto"];?></option>
                              <option>3ft.5in-105cm</option>
                              <option>3ft.6in-107cm</option>
                              <option>3ft.7in-110cm</option>
                              <option>3ft.8in-112cm</option>
                              <option>3ft.9in-114cm</option>
                              <option>3ft.10in-117cm</option>
                              <option>3ft.11in-119cm</option>
                              <option>4ft-122cm</option>
                              <option>4ft.1in-124cm</option>
                              <option>4ft.2in-127cm</option>
                              <option>4ft.3in-129cm</option>
                              <option>4ft.4in-132cm</option>
                              <option>4ft.5in-134cm</option>
                              <option>4ft.6in-137cm</option>
                              <option>4ft.7in-139cm</option>
                              <option>4ft.8in-142cm</option>
                              <option>4ft.9in-144cm</option>
                              <option>4ft.10in-147cm</option>
                              <option>4ft.11in-149cm</option>
                              <option>5ft-151cm</option>
                              <option>5ft.1in-154cm</option>
                              <option>5ft.2in-157cm</option>
                              <option>5ft.3in-160cm</option>
                              <option>5ft.4in-162cm</option>
                              <option>5ft.5in-165cm</option>
                              <option>5ft.6in-167cm</option>
                              <option>5ft.7in-170cm</option>
                              <option>5ft.8in-172cm</option>
                              <option>5ft 9in-175cm</option>
                              <option>5ft.10in-177cm</option>
                              <option>5ft.11in-180cm</option>
                              <option>6ft-182cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.1in-185cm</option>
                              <option>6ft.2in-187cm</option>
                              <option>6ft.3in-190cm</option>
                              <option>6ft.4in-193cm</option>
                              <option>6ft.5in-196cm</option>
                              <option>6ft.6in-198cm</option>
                              <option>6ft.7in-200cm</option>
                              <option>6ft.8in-203cm</option>
                              <option>6ft.9in-206cm</option>
                              <option>6ft.10in-208cm</option>
                              <option>6ft.11in-211cm</option>
                            </select>
						  </p></td>
                        </tr>
	<tr valign="top">
        <td height="30" align="right"><p><strong>Physical Status </strong></p></td>
        <td height="30"><p><strong>
			<input name="p_physical" type="radio" id="p_physical" tabindex="0" value="Normal" <?php if ($_SESSION["me"]["p_physical"]=="Normal") echo "checked"; ?>/>Normal &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="p_physical" type="radio" id="p_physical" tabindex="0" value="Physically challenged" <?php if ($_SESSION["me"]["p_physical"]=="Physically challenged") echo "checked"; ?>/>Physically Challenged &nbsp;&nbsp;&nbsp;&nbsp;
			<input name="p_physical" type="radio" id="p_physical" tabindex="0" value="Does not matter" <?php if ($_SESSION["me"]["p_physical"]=="Does not matter") echo "checked"; ?> />Doesn't matter
			<input name="p_physical" type="radio" id="p_physical" tabindex="0" value="Does not matter" <?php if ($_SESSION["me"]["p_physical"]=="Not mentioned") echo "checked"; ?> />Not mentioned
		</td>
	</tr>
	<tr>
	
	<tr valign="top">
                          <td align="right"><p><strong>Minimum Salary Per Year</strong></p></td>
                          <td height="24"><p>
                            <select name="p_salary">
							  <option  selected="selected" value="<?php echo $_SESSION["me"]["p_salary"];?>"><?php echo $_SESSION["me"]["p_salary"];?></option>
                              <option value="Does not matter">Doesn't matter</option>
                              <option>Rs.50,000</option>
                              <option>1,00,000</option>
                              <option>1,50,000</option>
                              <option>2,00,000</option>
                              <option>2,50,000</option>
                              <option>3,00,000</option>
                              <option>5,00,000</option>
                              <option>7,00,000</option>
                              <option>10,00,000</option>
							  <option>15,00,000</option>
							  <option>20,00,000</option>
							  <option>25,00,000</option>
							  <option>50,00,000</option>
							  <option>75,00,000</option>
							  <option>100,00,000</option>
                              <option>Rs.100,00,001 and above</option>
                              <option>$25,000</option>
                              <option>$50,000</option>
                              <option>$75,000</option>
                              <option>$100,000</option>
                              <option>$150,000</option>
                              <option>$200,000</option>
                              <option>$200,001 and above</option>
                            </select>
                          </p></td>
                        </tr>
                                <td align="right"><p class="style18"><strong>Religion</strong></p></td>
                                <td align="left"><p>
                                  <select name="p_religion" id="p_religion">
                                      <option  selected="selected" value="<?php echo $_SESSION["me"]["p_religion"];?>"><?php echo $_SESSION["me"]["p_religion"];?></option>
									  <option>Any </option>
                                      <option>Hindu </option>
                                      <option>Muslim </option>
                                      <option>Muslim - Shia </option>
                                      <option>Muslim - Sunni </option>
                                      <option>Christian </option>
                                      <option>Christian - Catholic </option>
                                      <option>Christian - Orthodox </option>
                                      <option>Christian - Protestant </option>
                                      <option>Sikh </option>
                                      <option>Jain </option>
                                      
                                      <option>Parsi </option>
                                      <option>Buddhist </option>
                                      <option>Inter Religion </option>
                                      <option>No Religion </option>
                                  </select>
                                </p></td>
    </tr>
	<tr>
                                <td height="23" align="right"><p class="style18"><strong>Mother Tongue</strong></p></td>
                                <td align="left"><p>
                                  <select name="p_language" id="p_language">
								    <option  selected="selected" value="<?php echo $_SESSION["me"]["p_laguage"];?>"><?php echo $_SESSION["me"]["p_language"];?></option>
                                    <option>Any</option>
                                    <option>Aka</option>
                                    <option>Arabic</option>
                                    <option>Assamese</option>
                                    <option>Awadhi</option>
                                    <option>Bengali</option>
                                    <option>Bhojpuri</option>
                                    <option>Bhutia</option>
                                    <option>Chatlisgarhi</option>
                                    <option>Chinese</option>
                                    <option>Dogri</option>
                                    <option>English</option>
                                    <option>French</option>
                                    <option>Garhwali</option>
                                    <option>Garo</option>
                                    <option>Gujarati</option>
                                    <option>Haryanvi</option>
                                    <option>Hindi</option>
                                    <option>Kakbarak</option>
                                    <option>Kanauji</option>
                                    <option>Kannada</option>
                                    <option>Kashmiri</option>
                                    <option>Khandesi</option>
                                    <option>Khasi</option>
                                    <option>Konkani</option>
                                    <option>Koshali</option>
                                    <option>Kumoani</option>
                                    <option>Kutchi</option>
                                    <option>Lepcha</option>
                                    <option>Magahi</option>
                                    <option>Maithili</option>
                                    <option>Malay</option>
                                    <option>Malayalam</option>
                                    <option>Manipuri</option>
                                    <option>Marathi</option>
                                    <option>Marwari</option>
                                    <option>Miji</option>
                                    <option>Mizo</option>
                                    <option>Monpa</option>
                                    <option>Nepali</option>
                                    <option>Oriya</option>
                                    <option>Persian</option>
                                    <option>Punjabi</option>
                                    <option>Rajasthani</option>
                                    <option>Russian</option>
                                    <option>Sanskrit</option>
                                    <option>Santhali</option>
                                    <option>Sindhi</option>
                                    <option>Spanish</option>
                                    <option>Swedish</option>
                                    <option>Tamil</option>
                                    <option>Tagalog</option>
                                    <option>Telugu</option>
                                    <option>Tulu</option>
                                    <option>Urdu</option>
                                    <option>Other</option>
                                  </select>
                                </p></td>
    </tr>	
	<tr>
                          <td align="right"><p class="style21"><strong>City</strong></p></td>
                          <td align="left"><p>
                              <input name="p_city" class="forminput" value="<?php echo $_SESSION["me"]["p_city"];?>" onkeypress="javascript: return chkspecialchars();" size="30" maxlength="45" />
                          </p></td>
    </tr>
	
	<tr>
                          <td align="right"><p class="style21"><strong>Residing State</strong></p></td>
                          <td align="left"><p>
                              <select id="state" name="p_state">
                                <option  selected="selected" value="<?php echo $_SESSION["me"]["p_state"];?>"><?php echo $_SESSION["me"]["p_state"];?></option>
                                <option>Andaman Nicobar</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chandigarh</option>
                                <option>Chhattisgarh</option>
                                <option>Dadra Nagar</option>
                                <option>Daman &amp; Diu</option>
                                <option>Delhi</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu &amp; Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Lakshadweep</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Orissa</option>
                                <option>Pondicherry</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Tripura</option>
                                <option>Uttar Pradesh</option>
                                <option>Uttaranchal</option>
                                <option>West Bengal</option>
                              </select>
                          </p></td>
    </tr>
						
                        <tr valign="top">
                          <td height="24" colspan="2" align="left" bgcolor="#9A005A"><p><strong class="onebig">Contact  Detail </strong><font color="#CCCCCC"> ------------------------------------------------------------------------------------------------------------</font></p></td>
                        </tr>
                        <tr>
                          <td align="right"><p class="style21"><strong>Residing State</strong></p></td>
                          <td align="left"><p>
                              <select id="state" name="state">
                                <option value="<?php echo $_SESSION["me"]["state"];?>" selected="selected"><?php echo $_SESSION["me"]["state"];?></option>
                                <option>Andaman Nicobar</option>
                                <option>Andhra Pradesh</option>
                                <option>Arunachal Pradesh</option>
                                <option>Assam</option>
                                <option>Bihar</option>
                                <option>Chandigarh</option>
                                <option>Chhattisgarh</option>
                                <option>Dadra Nagar</option>
                                <option>Daman &amp; Diu</option>
                                <option>Delhi</option>
                                <option>Goa</option>
                                <option>Gujarat</option>
                                <option>Haryana</option>
                                <option>Himachal Pradesh</option>
                                <option>Jammu &amp; Kashmir</option>
                                <option>Jharkhand</option>
                                <option>Karnataka</option>
                                <option>Kerala</option>
                                <option>Lakshadweep</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                                <option>Manipur</option>
                                <option>Meghalaya</option>
                                <option>Mizoram</option>
                                <option>Nagaland</option>
                                <option>Orissa</option>
                                <option>Pondicherry</option>
                                <option>Punjab</option>
                                <option>Rajasthan</option>
                                <option>Sikkim</option>
                                <option>Tamil Nadu</option>
                                <option>Tripura</option>
                                <option>Uttar Pradesh</option>
                                <option>Uttaranchal</option>
                                <option>West Bengal</option>
                              </select>
                          </p></td>
                        </tr>
                        <tr>
                          <td align="right"><p class="style21"><strong>City</strong></p></td>
                          <td align="left"><p>
                              <input name="city" class="forminput" value="<?php echo $_SESSION["me"]["city"];?>" onkeypress="javascript: return chkspecialchars();" size="30" maxlength="45" />
                          </p></td>
                        </tr>
                        <tr>
                          <td height="77" align="right" valign="top"><p class="style21"><strong>Contact Address</strong></p></td>
                          <td align="left"><p>
                              <textarea name="address" cols="30" rows="4" class="forminput" onkeypress="javascript: return chkspecialchars();"><?php echo $_SESSION["me"]["address"];?></textarea>
                              </p></td>
                        </tr>
                        <tr>
                          <td height="50" align="right"><p class="style21"><strong>Contact Phone</strong></p></td>
                          <td align="left"><p><span class="style14"><img width="1" height="1" src="RegistrationOne_clip_image001_0001.php" /> &nbsp;Mobile Number </span><br />
                                  <img width="1" height="1" src="RegistrationOne_clip_image001_0002.php" />
                                  
                            <input name="mob" type="text" id="mob" size="11" value="<?php echo $_SESSION["me"]["mob"];?>" maxlength="12" onkeypress="Javascript: return chknum()" />
							<input name="mob2" type="text" id="mob" size="11" value="<?php echo $_SESSION["me"]["mob2"];?>" maxlength="12" onkeypress="Javascript: return chknum()" />
                            </p></td>
                        </tr>
                        
                        <tr valign="top">
                          <td align="right"><p><strong>Country Living in </strong></p></td>
                          <td><p><span class="smalltxt">
                            <select name="country" size="1" id="country" style="FONT-SIZE: 8.5pt">
                              <option selected="selected" value="<?php echo $_SESSION["me"]["country"];?>"><?php echo $_SESSION["me"]["country"];?></option>
                              <option>United States of America</option>
                              <option>United Arab Emirates</option>
                              <option>Malaysia</option>
                              <option>United Kingdom</option>
                              <option>Australia</option>
                              <option>Saudi Arabia</option>
                              <option>Canada</option>
                              <option>Singapore</option>
                              <option>Kuwait</option>
                              <option>Afghanistan</option>
                              <option>Albania</option>
                              <option>Algeria</option>
                              <option>American Samoa</option>
                              <option>Andorra</option>
                              <option>Angola</option>
                              <option>Anguilla</option>
                              <option>Antarctica</option>
                              <option>Antigua and Barbuda</option>
                              <option>Argentina</option>
                              <option>Armenia</option>
                              <option>Aruba</option>
                              <option>Australia</option>
                              <option>Austria</option>
                              <option>Azerbaijan</option>
                              <option>Bahamas</option>
                              <option>Bahrain</option>
                              <option>Bangladesh</option>
                              <option>Barbados</option>
                              <option>Belarus</option>
                              <option>Belgium</option>
                              <option>Belize</option>
                              <option>Benin</option>
                              <option>Bermuda</option>
                              <option>Bhutan</option>
                              <option>Bolivia</option>
                              <option>Bosnia and Herzegovina</option>
                              <option>Botswana</option>
                              <option>Bouvet Island</option>
                              <option>Brazil</option>
                              <option>British Indian Ocean Territory</option>
                              <option>British Virgin Islands</option>
                              <option>Brunei</option>
                              <option>Bulgaria</option>
                              <option>Burkina Faso</option>
                              <option>Burundi</option>
                              <option>Cambodia</option>
                              <option>Cameroon</option>
                              <option>Canada</option>
                              <option>Cape Verde</option>
                              <option>Cayman Islands</option>
                              <option>Central African Republic</option>
                              <option>Chad</option>
                              <option>Chile</option>
                              <option>China</option>
                              <option>Christmas Island</option>
                              <option>Cocos Islands</option>
                              <option>Colombia</option>
                              <option>Comoros</option>
                              <option>Congo</option>
                              <option>Cook Islands</option>
                              <option>Costa Rica</option>
                              <option>Croatia</option>
                              <option>Cuba</option>
                              <option>Cyprus</option>
                              <option>Czech Republic</option>
                              <option>Denmark</option>
                              <option>Djibouti</option>
                              <option>Dominica</option>
                              <option>Dominican Republic</option>
                              <option>East Timor</option>
                              <option>Ecuador</option>
                              <option>Egypt</option>
                              <option>El Salvador</option>
                              <option>Equatorial Guinea</option>
                              <option>Eritrea</option>
                              <option>Estonia</option>
                              <option>Ethiopia</option>
                              <option>Falkland Islands</option>
                              <option>Faroe Islands</option>
                              <option>Fiji</option>
                              <option>Finland</option>
                              <option>France</option>
                              <option>French Guiana</option>
                              <option>French Polynesia</option>
                              <option>French Southern Territories</option>
                              <option>Gabon</option>
                              <option>Gambia</option>
                              <option>Georgia</option>
                              <option>Germany</option>
                              <option>Ghana</option>
                              <option>Gibraltar</option>
                              <option>Greece</option>
                              <option>Greenland</option>
                              <option>Grenada</option>
                              <option>Guadeloupe</option>
                              <option>Guam</option>
                              <option>Guatemala</option>
                              <option>Guinea</option>
                              <option>Guinea-Bissau</option>
                              <option>Guyana</option>
                              <option>Haiti</option>
                              <option>Heard and McDonald Islands</option>
                              <option>Honduras</option>
                              <option>Hong Kong</option>
                              <option>Hungary</option>
                              <option>Iceland</option>
                              <option>India</option>
                              <option>Indonesia</option>
                              <option>Iran</option>
                              <option>Iraq</option>
                              <option>Ireland</option>
                              <option>Israel</option>
                              <option>Italy</option>
                              <option>Ivory Coast</option>
                              <option>Jamaica</option>
                              <option>Japan</option>
                              <option>Jordan</option>
                              <option>Kazakhstan</option>
                              <option>Kenya</option>
                              <option>Kiribati</option>
                              <option>Korea, North</option>
                              <option>Korea, South</option>
                              <option>Kuwait</option>
                              <option>Kyrgyzstan</option>
                              <option>Laos</option>
                              <option>Latvia</option>
                              <option>Lebanon</option>
                              <option>Lesotho</option>
                              <option>Liberia</option>
                              <option>Libya</option>
                              <option>Liechtenstein</option>
                              <option>Lithuania</option>
                              <option>Luxembourg</option>
                              <option>Macau</option>
                              <option>Macedonia, Former Yugoslav Republic of</option>
                              <option>Madagascar</option>
                              <option>Malawi</option>
                              <option>Malaysia</option>
                              <option>Maldives</option>
                              <option>Mali</option>
                              <option>Malta</option>
                              <option>Marshall Islands</option>
                              <option>Martinique</option>
                              <option>Mauritania</option>
                              <option>Mauritius</option>
                              <option>Mayotte</option>
                              <option>Mexico</option>
                              <option>Micronesia, Federated States of</option>
                              <option>Moldova</option>
                              <option>Monaco</option>
                              <option>Mongolia</option>
                              <option>Montserrat</option>
                              <option>Morocco</option>
                              <option>Mozambique</option>
                              <option>Myanmar</option>
                              <option>Namibia</option>
                              <option>Nauru</option>
                              <option>Nepal</option>
                              <option>Netherlands</option>
                              <option>Netherlands Antilles</option>
                              <option>New Caledonia</option>
                              <option>New Zealand</option>
                              <option>Nicaragua</option>
                              <option>Niger</option>
                              <option>Nigeria</option>
                              <option>Niue</option>
                              <option>Norfolk Island</option>
                              <option>Northern Mariana Islands</option>
                              <option>Norway</option>
                              <option>Oman</option>
                              <option>Pakistan</option>
                              <option>Palau</option>
                              <option>Panama</option>
                              <option>Papua New Guinea</option>
                              <option>Paraguay</option>
                              <option>Peru</option>
                              <option>Philippines</option>
                              <option>Pitcairn Island</option>
                              <option>Poland</option>
                              <option>Portugal</option>
                              <option>Puerto Rico</option>
                              <option>Qatar</option>
                              <option>Reunion</option>
                              <option>Romania</option>
                              <option>Russia</option>
                              <option>Rwanda</option>
                              <option>S. Georgia and S. Sandwich Isls.</option>
                              <option>Saint Kitts &amp; Nevis</option>
                              <option>Saint Lucia</option>
                              <option>Saint Vincent and The Grenadines</option>
                              <option>Samoa</option>
                              <option>San Marino</option>
                              <option>Sao Tome and Principe</option>
                              <option>Saudi Arabia</option>
                              <option>Senegal</option>
                              <option>Seychelles</option>
                              <option>Sierra Leone</option>
                              <option>Singapore</option>
                              <option>Slovakia</option>
                              <option>Slovenia</option>
                              <option>Somalia</option>
                              <option>South Africa</option>
                              <option>Spain</option>
                              <option>Sri Lanka</option>
                              <option>St. Helena</option>
                              <option>St. Pierre and Miquelon</option>
                              <option>Sudan</option>
                              <option>Suriname</option>
                              <option>Svalbard and Jan Mayen Islands</option>
                              <option>Swaziland</option>
                              <option>Sweden</option>
                              <option>Switzerland</option>
                              <option>Syria</option>
                              <option>Taiwan</option>
                              <option>Tajikistan</option>
                              <option>Tanzania</option>
                              <option>Thailand</option>
                              <option>Togo</option>
                              <option>Tokelau</option>
                              <option>Tonga</option>
                              <option>Trinidad and Tobago</option>
                              <option>Tunisia</option>
                              <option>Turkey</option>
                              <option>Turkmenistan</option>
                              <option>Turks and Caicos Islands</option>
                              <option>Tuvalu</option>
                              <option>Uganda</option>
                              <option>Ukraine</option>
                              <option>United Arab Emirates</option>
                              <option>United Kingdom</option>
                              <option>United States of America</option>
                              <option>Uruguay</option>
                              <option>Uzbekistan</option>
                              <option>Vanuatu</option>
                              <option>Vatican City</option>
                              <option>Venezuela</option>
                              <option>Vietnam</option>
                              <option>Virgin Islands</option>
                              <option>Wallis and Futuna Islands</option>
                              <option>Western Sahara</option>
                              <option>Yemen</option>
                              <option>Yugoslavia (Former)</option>
                              <option>Zaire</option>
                              <option>Zimbabwe</option>
                            </select>
                          </span></p></td>
                        </tr>
                        <tr valign="top">
                          <td align="right"><p><strong>Citizenship</strong> </p></td>
                          <td><p><span class="smalltxt frmlftpad">
                            <select name="citizenship" size="1" id="citizenship" style="width:245px;FONT-SIZE:8.5pt">
                              <option selected="selected" value="<?php echo $_SESSION["me"]["citizenship"];?>"><?php echo $_SESSION["me"]["citizenship"];?></option>
                              <option>United States of America</option>
                              <option>United Arab Emirates</option>
                              <option>Malaysia</option>
                              <option>United Kingdom</option>
                              <option>Australia</option>
                              <option>Saudi Arabia</option>
                              <option>Canada</option>
                              <option>Singapore</option>
                              <option>Kuwait</option>
                              <option>Afghanistan</option>
                              <option>Albania</option>
                              <option>Algeria</option>
                              <option>American Samoa</option>
                              <option>Andorra</option>
                              <option>Angola</option>
                              <option>Anguilla</option>
                              <option>Antarctica</option>
                              <option>Antigua and Barbuda</option>
                              <option>Argentina</option>
                              <option>Armenia</option>
                              <option>Aruba</option>
                              <option>Australia</option>
                              <option>Austria</option>
                              <option>Azerbaijan</option>
                              <option>Bahamas</option>
                              <option>Bahrain</option>
                              <option>Bangladesh</option>
                              <option>Barbados</option>
                              <option>Belarus</option>
                              <option>Belgium</option>
                              <option>Belize</option>
                              <option>Benin</option>
                              <option>Bermuda</option>
                              <option>Bhutan</option>
                              <option>Bolivia</option>
                              <option>Bosnia and Herzegovina</option>
                              <option>Botswana</option>
                              <option>Bouvet Island</option>
                              <option>Brazil</option>
                              <option>British Indian Ocean Territory</option>
                              <option>British Virgin Islands</option>
                              <option>Brunei</option>
                              <option>Bulgaria</option>
                              <option>Burkina Faso</option>
                              <option>Burundi</option>
                              <option>Cambodia</option>
                              <option>Cameroon</option>
                              <option>Canada</option>
                              <option>Cape Verde</option>
                              <option>Cayman Islands</option>
                              <option>Central African Republic</option>
                              <option>Chad</option>
                              <option>Chile</option>
                              <option>China</option>
                              <option>Christmas Island</option>
                              <option>Cocos Islands</option>
                              <option>Colombia</option>
                              <option>Comoros</option>
                              <option>Congo</option>
                              <option>Cook Islands</option>
                              <option>Costa Rica</option>
                              <option>Croatia</option>
                              <option>Cuba</option>
                              <option>Cyprus</option>
                              <option>Czech Republic</option>
                              <option>Denmark</option>
                              <option>Djibouti</option>
                              <option>Dominica</option>
                              <option>Dominican Republic</option>
                              <option>East Timor</option>
                              <option>Ecuador</option>
                              <option>Egypt</option>
                              <option>El Salvador</option>
                              <option>Equatorial Guinea</option>
                              <option>Eritrea</option>
                              <option>Estonia</option>
                              <option>Ethiopia</option>
                              <option>Falkland Islands</option>
                              <option>Faroe Islands</option>
                              <option>Fiji</option>
                              <option>Finland</option>
                              <option>France</option>
                              <option>French Guiana</option>
                              <option>French Polynesia</option>
                              <option>French Southern Territories</option>
                              <option>Gabon</option>
                              <option>Gambia</option>
                              <option>Georgia</option>
                              <option>Germany</option>
                              <option>Ghana</option>
                              <option>Gibraltar</option>
                              <option>Greece</option>
                              <option>Greenland</option>
                              <option>Grenada</option>
                              <option>Guadeloupe</option>
                              <option>Guam</option>
                              <option>Guatemala</option>
                              <option>Guinea</option>
                              <option>Guinea-Bissau</option>
                              <option>Guyana</option>
                              <option>Haiti</option>
                              <option>Heard and McDonald Islands</option>
                              <option>Honduras</option>
                              <option>Hong Kong</option>
                              <option>Hungary</option>
                              <option>Iceland</option>
                              <option>India</option>
                              <option>Indonesia</option>
                              <option>Iran</option>
                              <option>Iraq</option>
                              <option>Ireland</option>
                              <option>Israel</option>
                              <option>Italy</option>
                              <option>Ivory Coast</option>
                              <option>Jamaica</option>
                              <option>Japan</option>
                              <option>Jordan</option>
                              <option>Kazakhstan</option>
                              <option>Kenya</option>
                              <option>Kiribati</option>
                              <option>Korea, North</option>
                              <option>Korea, South</option>
                              <option>Kuwait</option>
                              <option>Kyrgyzstan</option>
                              <option>Laos</option>
                              <option>Latvia</option>
                              <option>Lebanon</option>
                              <option>Lesotho</option>
                              <option>Liberia</option>
                              <option>Libya</option>
                              <option>Liechtenstein</option>
                              <option>Lithuania</option>
                              <option>Luxembourg</option>
                              <option>Macau</option>
                              <option>Macedonia, Former Yugoslav Republic of</option>
                              <option>Madagascar</option>
                              <option>Malawi</option>
                              <option>Malaysia</option>
                              <option>Maldives</option>
                              <option>Mali</option>
                              <option>Malta</option>
                              <option>Marshall Islands</option>
                              <option>Martinique</option>
                              <option>Mauritania</option>
                              <option>Mauritius</option>
                              <option>Mayotte</option>
                              <option>Mexico</option>
                              <option>Micronesia, Federated States of</option>
                              <option>Moldova</option>
                              <option>Monaco</option>
                              <option>Mongolia</option>
                              <option>Montserrat</option>
                              <option>Morocco</option>
                              <option>Mozambique</option>
                              <option>Myanmar</option>
                              <option>Namibia</option>
                              <option>Nauru</option>
                              <option>Nepal</option>
                              <option>Netherlands</option>
                              <option>Netherlands Antilles</option>
                              <option>New Caledonia</option>
                              <option>New Zealand</option>
                              <option>Nicaragua</option>
                              <option>Niger</option>
                              <option>Nigeria</option>
                              <option>Niue</option>
                              <option>Norfolk Island</option>
                              <option>Northern Mariana Islands</option>
                              <option>Norway</option>
                              <option>Oman</option>
                              <option>Pakistan</option>
                              <option>Palau</option>
                              <option>Panama</option>
                              <option>Papua New Guinea</option>
                              <option>Paraguay</option>
                              <option>Peru</option>
                              <option>Philippines</option>
                              <option>Pitcairn Island</option>
                              <option>Poland</option>
                              <option>Portugal</option>
                              <option>Puerto Rico</option>
                              <option>Qatar</option>
                              <option>Reunion</option>
                              <option>Romania</option>
                              <option>Russia</option>
                              <option>Rwanda</option>
                              <option>S. Georgia and S. Sandwich Isls.</option>
                              <option>Saint Kitts &amp; Nevis</option>
                              <option>Saint Lucia</option>
                              <option>Saint Vincent and The Grenadines</option>
                              <option>Samoa</option>
                              <option>San Marino</option>
                              <option>Sao Tome and Principe</option>
                              <option>Saudi Arabia</option>
                              <option>Senegal</option>
                              <option>Seychelles</option>
                              <option>Sierra Leone</option>
                              <option>Singapore</option>
                              <option>Slovakia</option>
                              <option>Slovenia</option>
                              <option>Somalia</option>
                              <option>South Africa</option>
                              <option>Spain</option>
                              <option>Sri Lanka</option>
                              <option>St. Helena</option>
                              <option>St. Pierre and Miquelon</option>
                              <option>Sudan</option>
                              <option>Suriname</option>
                              <option>Svalbard and Jan Mayen Islands</option>
                              <option>Swaziland</option>
                              <option>Sweden</option>
                              <option>Switzerland</option>
                              <option>Syria</option>
                              <option>Taiwan</option>
                              <option>Tajikistan</option>
                              <option>Tanzania</option>
                              <option>Thailand</option>
                              <option>Togo</option>
                              <option>Tokelau</option>
                              <option>Tonga</option>
                              <option>Trinidad and Tobago</option>
                              <option>Tunisia</option>
                              <option>Turkey</option>
                              <option>Turkmenistan</option>
                              <option>Turks and Caicos Islands</option>
                              <option>Tuvalu</option>
                              <option>Uganda</option>
                              <option>Ukraine</option>
                              <option>United Arab Emirates</option>
                              <option>United Kingdom</option>
                              <option>United States of America</option>
                              <option>Uruguay</option>
                              <option>Uzbekistan</option>
                              <option>Vanuatu</option>
                              <option>Vatican City</option>
                              <option>Venezuela</option>
                              <option>Vietnam</option>
                              <option>Virgin Islands</option>
                              <option>Wallis and Futuna Islands</option>
                              <option>Western Sahara</option>
                              <option>Yemen</option>
                              <option>Yugoslavia (Former)</option>
                              <option>Zaire</option>
                              <option>Zambia</option>
                              <option>Zimbabwe</option>
                            </select>
                          </span></p></td>
                        </tr>
                        
                        <tr valign="top">
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr valign="top">
                          <td><input name="ht" type="hidden" id="ht" /></td>
                          <td><input type="submit" name="submit" value="Update My Profile" onclick="javascript: return htplace()" />                          </td>
                        </tr>
                        <tr valign="top">
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                      </table>
                    </form></td>
</tr>