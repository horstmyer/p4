<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>@yield('title','Register Your Pet')</title>
<link href="/css/styles.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/kaushan-script:n4:default.js" type="text/javascript"></script>
</head>

<body>
<div id="container">
	<!-- Begin Header -->
	<div id="header">
   	  	<a href="index.php"><img src="/images/MSCCDogsLogo.gif" width="454" height="126" alt=""/></a>
        <section>
					@yield('login')
				</section>
				<div class="nav">
        	@if(Auth::check())
						<p><a href="/"><img src="/images/bonenav.png" width="100" height="40" alt=""/></a></p>
						<p><a href="/profile"><img src="/images/profile.png" width="100" height="40" alt=""/></a></p>
						<p><a href="/profile/addpet"><img src="/images/addpet.png" width="100" height="40" alt=""/></a></p>
						<p><a href="/logout"><img src="/images/logout.png" width="100" height="40" alt=""/></a></p>
            @else
						<p><a href="/"><img src="/images/bonenav.png" width="100" height="40" alt=""/></a></p>
						<p><a href="/register"><img src="/images/register.png" width="100" height="40" alt=""/></a></p>
            @endif

    </div>
  	</div>
    <!-- Begin Paws -->
    <div class="paws">
    </div>
	<!-- Begin Intro -->
    <div class="intro">
    	<section>
				@yield('intro')
			</section>
	</div>
    <!-- Begin Paws -->
	<div class="paws">
    </div>
    <!-- Begin Missing Pets -->
    <div class="missing">
			 <section>@yield('buttons')</section>
    	<!-- Phase II display of missing critters
    	<table width="800" border="1">
  		<tbody>
    		<tr>
      			<td><h3>Miss Miya</h3><img src="images/miya.gif" width="200" height="184" alt=""/></td>
      			<td><h3>Miss Miya</h3><img src="images/miya.gif" width="200" height="184" alt=""/></td>
      			<td><h3>Miss Miya</h3><img src="images/miya.gif" width="200" height="184" alt=""/></td>
    		</tr>
  		</tbody>
		</table> -->
    </div>
    <!-- Begin Paws -->
	<div class="paws"></div>
    <!-- Begin Footer -->
	<div id="footer">
   	  <p>&copy; 2015 Linda Horstmyer</p>
  	</div>
</div>
</body>
</html>
