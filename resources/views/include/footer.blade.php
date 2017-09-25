
<style type="text/css">
	.footul{
		color: #333!important;
		padding:5px;
		margin:0px;
		font-family: 'hind-bold';
	}
	.footul > li{
		display: inline-block;
		padding:5px;
	}
	.footul > li > a{
		color:#aaa!important;
		font-family: 'hind-regular';
	}
	#footer{
		margin-top:20px;
		padding:0px;
		bottom: 0px;
		text-align: center;
		height: 50px;
		width: 100%;
		border-top: 1px solid #ddd;

	}
	.sosmed li{
		display: inline-block;
	}
</style>
<footer id="footer">
<div class="container-fluid">
		<ul class="footul pull-left" style="padding-top: 10px!important;">
			&copy; 2017 Bagidelo
			<li>
				<a href="{{URL('#')}}">About</a>
			</li>
			<li>
				<a href="{{URL('#')}}">Privacy</a>
			</li>
			<li>
				<a href="{{URL('#')}}">Terms of Service</a>
			</li>
			<li>
				<a href="{{URL('#')}}">Help</a>
			</li>
		</ul>
		<ul class="footul text-right">
		<li><img src="{{asset('img/icon/insta.svg')}}" width="24" /></li>
		<li><img src="{{asset('img/icon/twit.svg')}}" width="24" /></li>
		<li><img src="{{asset('img/icon/fb.svg')}}" width="24" /></li>
		<li></li>
		<li></li>

		</ul>
	</div>

</footer>