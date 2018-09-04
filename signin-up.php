<?php
/*
 © aditya thakur
  contact: https://www.linkedin.com/in/aditya532/
 ALL RIGHTS RESERVED
 */
	$page_requirements = '<title>signin or login | IT Dept</title>';
	include( "header.php" );
?>
<!DOCTYPE html><html lang='en' class=''>
<head><script src='//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js'></script><script src='//static.codepen.io/assets/editor/live/css_live_reload_init-890dc39bb89183d4642d58b1ae5376a0193342f9aed88ea04330dc14c8d52f55.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/vikasverma93/pen/zplmq" />

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<style class="cp-pen-styles">body{
  background-color: lightcyan;
}
.login-box{
  position:relative;
  margin: 10px auto;
  width: 500px;
  height: 420px;
  background-color: lightgoldenrodyellow;
  padding: 10px;
  border-radius: 3px;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
}
.lb-header{
  position:relative;
  color: #00415d;
  margin: 5px 5px 10px 5px;
  padding-bottom:10px;
  border-bottom: 1px solid #eee;
  text-align:center;
  height:28px;
}
.lb-header a{
  margin: 0 25px;
  padding: 0 20px;
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.lb-header .active{
  color: #029f5b;
  font-size: 18px;
}
.email-login,.email-signup{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  margin-top: 20px;
  text-align:center;
}
.u-form-group{
  width:100%;
  margin-bottom: 10px;
}
.gender{
		display: block;
	}
.u-form-group input[type="text"],
.u-form-group input[type="email"],
.u-form-group input[type="password"]{
  width: calc(50% - 22px);
  height:45px;
  outline: none;
  border: 1px solid #ddd;
  padding: 0 10px;
  border-radius: 2px;
  color: #333;
  font-size:0.8rem;
  -webkit-transition:all 0.1s linear;
  -moz-transition:all 0.1s linear;
  transition:all 0.1s linear;
}
.u-form-group input:focus{
  border-color: #358efb;
}
.u-form-group button{
  width:50%;
  background-color: #1CB94E;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding: 14px 0;
  border-radius: 2px;
  text-transform: uppercase;
}
.forgot-password{
  width:50%;
  text-align: left;
  text-decoration: underline;
  color: #888;
  font-size: 0.75rem;
}</style></head><body>

  <div class="login-box">
    <div class="lb-header">
      <a href="#" class="active" id="login-box-link">Login</a>
      <a href="#" id="signup-box-link">Sign Up</a>
    </div>
    <form class="email-login" action="login.php" method="POST"><!--for login-->
      <div class="u-form-group">
        <input type="email" placeholder="Email" name="email" autocomplete="off"/>
      </div>
      <div class="u-form-group">
        <input type="password" placeholder="Password" name="password" autocomplete="off"/>
      </div>
      <div class="u-form-group">
        <button>Log in</button>
      </div>
      <div class="u-form-group">
        <a href="#" class="forgot-password" >Forgot password?</a>
      </div>
	  <div class="u-form-group">
        <span><?php echo $_SESSION['message'];?></span>
      </div>
    </form>
    <form class="email-signup" action="register.php" method="POST" ><!--for registration-->
	  <div class="u-form-group">
        <input type="text" placeholder="Full Name" name='full_name' required/>
      </div>
	  <div class="u-form-group">
        <input type="email" placeholder="Email" name = "email"/>
      </div>
      <div class="u-form-group">
        	<div class = "roll">
				Roll NO. : <select name="year">
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
			</select>
					   <select name="dept">
				<option value="IT">IT</option>
			</select>
					   <select name="roll">
				<option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
				<option value="05">05</option>
				<option value="06">06</option>
				<option value="07">07</option>
				<option value="08">08</option>
				<option value="09">09</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>
				<option value="41">41</option>
				<option value="42">42</option>
				<option value="43">43</option>
				<option value="44">44</option>
				<option value="45">45</option>
				<option value="46">46</option>
				<option value="47">47</option>
				<option value="48">48</option>
				<option value="49">49</option>
				<option value="50">50</option>
				<option value="51">51</option>
				<option value="52">52</option>
				<option value="53">53</option>
				<option value="54">54</option>
				<option value="55">55</option>
				<option value="56">56</option>
				<option value="57">57</option>
				<option value="58">58</option>
				<option value="59">59</option>
				<option value="60">60</option>
				<option value="61">61</option>
				<option value="62">62</option>
				<option value="63">63</option>
				<option value="64">64</option>
				<option value="65">65</option>
				<option value="66">66</option>
				<option value="67">67</option>
				<option value="68">68</option>
				<option value="69">69</option>
				<option value="70">70</option>
				<option value="71">71</option>
				<option value="72">72</option>
				<option value="73">73</option>
				<option value="74">74</option>
				<option value="75">75</option>
				<option value="76">76</option>
				<option value="77">77</option>
				<option value="78">78</option>
				<option value="79">79</option>
				<option value="80">80</option>
				<option value="81">81</option>
				<option value="82">82</option>
				<option value="83">83</option>
				<option value="84">84</option>
				<option value="85">85</option>
				<option value="86">86</option>
				<option value="87">87</option>
				<option value="88">88</option>
				<option value="89">89</option>
				<option value="90">90</option>
				<option value="91">91</option>
				<option value="92">92</option>
				<option value="93">93</option>
				<option value="94">94</option>
				<option value="95">95</option>
				<option value="96">96</option>
				<option value="97">97</option>
				<option value="98">98</option>
				<option value="99">99</option>
				<option value="100">100</option>
				<option value="101">101</option>
				<option value="102">102</option>
				<option value="103">103</option>
				<option value="104">104</option>
				<option value="105">105</option>
				<option value="106">106</option>
				<option value="107">107</option>
				<option value="108">108</option>
				<option value="109">109</option>
				<option value="110">110</option>
				<option value="111">111</option>
				<option value="112">112</option>
				<option value="113">113</option>
				<option value="114">114</option>
				<option value="115">115</option>
				<option value="116">116</option>
				<option value="117">117</option>
				<option value="118">118</option>
				<option value="119">119</option>
				<option value="120">120</option>
				<option value="121">121</option>
				<option value="122">122</option>
				<option value="123">123</option>
				<option value="124">124</option>
				<option value="125">125</option>
				<option value="126">126</option>
				<option value="127">127</option>
				<option value="128">128</option>
				<option value="129">129</option>
				<option value="130">130</option>
				<option value="131">131</option>
				<option value="132">132</option>
				<option value="133">133</option>
				<option value="134">134</option>
				<option value="135">135</option>
				<option value="136">136</option>
				<option value="137">137</option>
				<option value="138">138</option>
				<option value="139">139</option>
				<option value="140">140</option>
				<option value="141">141</option>
				<option value="142">142</option>
				<option value="143">143</option>
				<option value="144">144</option>
				<option value="145">145</option>
				<option value="146">146</option>
				<option value="147">147</option>
				<option value="148">148</option>
				<option value="149">149</option>
				<option value="150">150</option>
				<option value="151">151</option>
				<option value="152">152</option>
				<option value="153">153</option>
				<option value="154">154</option>
				<option value="155">155</option>
				<option value="156">156</option>
				<option value="157">157</option>
				<option value="158">158</option>
				<option value="159">159</option>
				<option value="160">160</option>
				<option value="161">161</option>
				<option value="162">162</option>
				<option value="163">163</option>
				<option value="164">164</option>
				<option value="165">165</option>
				<option value="166">166</option>
				<option value="167">167</option>
				<option value="168">168</option>
				<option value="169">169</option>
				<option value="170">170</option>
			</select>
			</div>
      </div>
		<div class="u-form-group">
			<div class = "gender">
				Gender : 
		  		<input type="radio" name="gender" value="male" checked> Male
  				<input type="radio" name="gender" value="female"> Female
			</div>
		</div>
      <div class="u-form-group">
        <input name = "password" type="password" placeholder="Password"/>
      </div>
      <div class="u-form-group">
        <input name = "password" type="password" placeholder="Confirm Password"/>
      </div>
      <div class="u-form-group">
        <button>Sign Up</button>
      </div>
    </form>
  </div>
<script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >$(".email-signup").hide();
$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
});
//# sourceURL=pen.js
</script>
</body></html>