<?php
//*front-page.php

remove_action( 'genesis_loop', 'genesis_do_loop' );
genesis();
?>


<style type="text/css">
	/*Remove everything on Front Page*/
	.site-header, .site-inner, .site-footer{
		display: none;
	}

	.nav-primary{
		background-color: transparent;
	}
	ul#menu-main{
		text-align: right;
	}
	ul#menu-main li a{
		font-family: 'Roboto', sans-serif;
		color: white;
		font-size: 130%;
	}
	@media only screen and (max-width: 960px){
		ul#menu-main{
			text-align: center;
		}
	}

	/*set header hero image and darken it*/
	.hero-image {
		width: 100%;
		height: 100vh;
		position: relative;
	}

	.hero-image::after {
		content: "";
		background-image: url('https://lh3.googleusercontent.com/2THEgoCxWUmzN4Waw8VrEkBPjDpvzz2Mg6ByLL7Cl8qpbOEjyNY=w1920-h828-no');
		background-size: cover;
		background-position: center;
		opacity: 0.3;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		position: absolute;
		z-index: -1;   
	}

	.hero-image::before {
		content: "";
		background-color: black;
		background-size: cover;
		background-position: center;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		position: absolute;
		z-index: -2;   
	}
	/*END set header hero image and darken it*/

	/*Hero image text*/
	.hero-image-text h1,.hero-image-text h2,.hero-image-text h3,.hero-image-text h4,.hero-image-text h5,.hero-image-text h6{
		color: white;
		text-align: center;
		font-family: 'Roboto', sans-serif;
	}

	.hero-image-text{
		width: 100%;
		color: white;
		text-align: center;
		font-family: 'Roboto', sans-serif;
		position: absolute;
		top:50%;
		left:50%;
		transform: translate(-50%, -50%);
	}
	@media only screen and (min-width: 760px) {
		.hero-image-text h1{
			font-size: 5vw;
		}
		.hero-image-text p{
			font-size: 2vw;
		}
	}
	/*END Hero image text*/
	
	/* Feature Area*/
	.feature-box{
		width:100%;
	}
	.feature-box-image, .feature-box-text{
		display: block;
		float: left;
		padding: 15px;
	}
	.feature-box-image{
		width: 30%;
	}
	.feature-box-text{
		width: 60%;
		text-align: justify;
		text-justify: inter-word;
	}
	.feature-box-text{
		color: black;
	}

	.feature-box-img{
		width: 100%;
	}
	.feature-box-headline{
		width: 100%;
		text-align: center;
		margin-top: 50px;
	}
	/*END Feature Area*/

	/*Contact Area*/
	.for-home-contact-form{
		width: 100%;
		background-color: #E6E6E6;
		padding: 50px;
	}
	.for-home-contact-form .wrap div{
		text-align: right;
	}
	#for-home-contact-form-1{
		font-size: 7vw;
	}
	#for-home-contact-form-2{
		font-size: 12vw;
	}
	.wpcf7 p{
		text-align: left;
	}
	@media only screen and (max-width: 800px){
		.for-home-contact-form .wrap div{
			text-align: left;
		}
	}
	/*END Contact Area*/
</style>

<div class="hero-image">
	<?php genesis_do_nav() ?>
	<div class="hero-image-text">
		<h1>Jacob Goh</h1>
		<h1>WordPress Developer</h1>
		<p>I create websites that are fast, mobile responsive, and easy to manage.</p>
	</div>
</div>

<div class="wrap">
	<div class="feature-box-headline">
		<h1>The websites I build are:</h1><br/>
	</div>
	<div class="one-third first">
		<div class="feature-box">
			<div class="feature-box-image">
				<img class="feature-box-img" src="https://lh3.googleusercontent.com/tdgDf3xuC6EMARQsu7HJB1zVmlkMI0cuIf0laGxaT-5VK3qyya4hsgfV8DRFNUbf3Do9ZQa4RhNRvcbFdSwujXsBmku9l1vxUjI4sVsmcNMWY7SXPrRjFug41nZXQr6H06iaepS8ZmJb6-1BFQSJaex7CTT1gAMI9xBt1mk7KFZxiYp3j0KJ_rYJ7e28fV6duPyB8ucoT8H0IizAWvuxxdhdH0QgE52755923jAsrUyOnXPBBZFI7-5hMW1uXC7zmwlIh0xmPhyygpfgNTZgYHgw3dH-X_nPEuBAdXWg5nJDvRotAxCcfDj_zw5duB9WLiMpYiPOhK5ph9-iy68NhR_geOpVmMqPvJdCqKOWdXqOEj_tEY-QkM4_jluULU4awt9SVGzMxNvMCYVxkNBbH9qt49VFY6O-I_UCu-uLWuDGN0ATj7vw5Q9IlacShY9fSGh6If4XByUKYNJqU8ubhXx1Rmzu5HWHGsoKYDbIXJrNga5JXEr-D0XdnIU0TsXZlz5H4ZcrkjlwCotDf4c1ub7yPwFJohXG_crWXAuVOWo=s128-no">
			</div>
			<div class="feature-box-text">
				<h3>Professionally Designed</h3>
				<p>My designer colleague and I will create something gorgeous just for you.</p>
			</div>
		</div>
	</div>
	<div class="one-third">
		<div class="feature-box">
			<div class="feature-box-image">
				<img class="feature-box-img" src="https://lh3.googleusercontent.com/d51LONJLQjsjX0vkGMSz5DfmlREjSkunj65l-0MEX_oC9fYxRirpv23xYSM_kIfaLJJw1GPt6m1fnmnKwJsNvOp1krGGM61raNuz1pUcAB8aMz8jfiDKpUyRyF35Z__V8UyyuV4bxJCh4CexQbT-04lKYqLGQTqDJDyXIoNtQebTETBGkf1lYZiwgqGJf2N1i40XoOffpvY4uQLRJJWrRshlXUl3zbwjjdfxXGppn6VFKadFQwuPvh_2OwKu_IspA8Gf0q3pa4A1AK7bFyzEXCKWX5okKFrluSNzlgjxHs4-nSZjKn7-NURpDqFBmLNzirRscVaYoTbl5wgqsdu-NPBy7JCWepgck2k5kGo0L8FMHfM6_AEu_aXqY03-gn-nm8If7C0rjgEPfaeHJ7__oxI-98Aczg4KqbR5KBd-PP9aN3HO_smw6HWrIvZnnsAJD-I2LoZPLdvCOIxXjV8LBWIdC3zdZfiQJMnjtzoT2VPPir_aOcec6VVKo5yWhCHMdxmROpkn7iXvlfQxQP1bKBvAMPL95jSdknL9QGnMyjs=s128-no">
			</div>
			<div class="feature-box-text">
				<h3>Fully Responsive</h3>
				<p>I know how important mobile and tablets are. That is why I will ensure that your website works great on all devices.</p>
			</div>
		</div>
	</div>
	<div class="one-third">
		<div class="feature-box">
			<div class="feature-box-image">
				<img class="feature-box-img" src="https://lh3.googleusercontent.com/8zYadX87zbvzJskt4Ahi93nQ1sMuTb3rznGHXaD_I24O4D2UG_Zj7aNcKt3Dlb70EBiDPC5roNu9mLTQ1Rt7DgAnDbWTVmS3ITGVld6qjCc4rDVY7Zr93WkMo9PRCMjnRspFyxc8Tm662SoR7CTXy8Q5BwPI3j9_iBNcte6UEhB0RHNwto6ZGRzYhkwLurxgngUmzhHyR3IkdpTWakkgCkgY_VF8q7IG7RdbdE1W3O3r7Q7UB0DmIRU-ynC27xI0oA2nOeadDdxYSdcJtuccpFZxAJiCJMLCXfA6Sh1zC58IMeDkh0EYJKjLYmhj7k9a2FPzBJFSQtqGjRlNAlJHvy6ibC9cNmZxAmBG73K9hq4Xre2AHXXtqHXTBk2FGi7kqr0G6_2zU6F_RsOIMajfU-VCvkT0cd6nUFhj9y-l81aDY9GUrRfRmZiDyFt-tSJ4B5e8NQ0qkFVbFIgT-lPwE2qEJ80yjktlUpeG_4aXm9Ax5yQW45Dn1XB1sxzmB1XUcHo7OPCfevp4YzkZsvzEwXiSCpj1uqj-tAnKcvd0D4Q=s128-no">
			</div>
			<div class="feature-box-text">
				<h3>Fast & Smooth</h3>
				<p>Slow sites means bad user experience. I will make your website load fast for your user.</p>
			</div>
		</div>
	</div>

	<div class="one-third first">
		<div class="feature-box">
			<div class="feature-box-image">
				<img class="feature-box-img" src="https://lh3.googleusercontent.com/c6zJckS1N6Q7XU6-C2ry7J43bmnesKgIfRotghH83Qw4UiZpBzmALWrC40v-HctlvCJl32LaSv9hqB4zwV7vAS9vp1lzStILcelfw1q_EQ71A75_MLsie0c9wXbJ5SYYEAzRuIGYV7lLrXwnmuGOR-psiIpy7DCk7mKLkAOcZ0h9QiYadxwt0ecm2Oq2o23DPJiEwr0qQwwUWp0BDjsTYDscpg797EswJTNjp5vjPfYiA-EBGdFcVEEOaeiJAQ2LAxwOhhhT4p7yVFh2IrToxmba5XPSquThP9C0_Zg5CctH_cq3Ua0Kal-Tarhon-JX6Vuu6NbvKZ_DMaguKsOWaFmW6ebumOXbLIAHiC3g4L2zoJy5NNFL_4_KkyeUMWUna-Isc16eKTaOkFx1aDZyb2nFpcvVJ5cYhPpzuykQaxWW67fhukMaZpfl0EATFPTSJ1vPzbDqQy8dlwFWcoTCz_zjc2kb8xh7uTL5ZVq8ck8VHzLGA2NwzEfpap0l3UpLoNStH1rUqdOPB2vMDcYDtrV8cwoI-OJ7AsOKamHcbmc=s128-no">
			</div>
			<div class="feature-box-text">
				<h3>Secure</h3>
				<p>The websites are built on Genesis Framework, which means the websites I build will always be following WordPress security best practice.</p>
			</div>
		</div>
	</div>
	<div class="one-third">
		<div class="feature-box">
			<div class="feature-box-image">
				<img class="feature-box-img" src="https://lh3.googleusercontent.com/ZOpSMan_crzFUJf1ejvOYjohP31pjAKgywMxKzo9cH-ODcTVVT4rhdtz8eXZbLZmSIozdv4MdyIZxEkvb3s-eNyn7KxXs0qoArPS6x1npPCv2MAzUyrkhCHY_4kWNPMMohWK2XMKVyxyxsehnOPDu_7suQE605CSV3hMKnHnQKPKnXKIh1y0xace9C6grNcO7eEHUBXf3HjmAyie82kQ_X1o-HpXOkNjaZGtLiHCBM5SNJKMKvRw8svd2oeI8-OjH-Pqf0Et-BgveVycI3s3UEby0ELhTI8AtOSzsLUp-9f5K7I52IVtfPoSLFlXw56lhxEVI7HEK1NQpng2vNUTf8U4t7LtVLd7hIVIS-bkdu8KElNpmI5VZ2XQimK2uZVMIdw-246cJRjd2eliMcH6Qr7Mm6soxV7MxwFLcxZFjoy5uKsaz9JeMNYCuTkUCPeN_tIskw29i_meSRgY12KOW_kL_5MvlSbZnGlR6wa5NCrKq57Fgnl6azrbWl-hRXU5zDtL6PzVJqchryjCDmDtgcuXDwl824wHoVeTpALPNio=s128-no">
			</div>
			<div class="feature-box-text">
				<h3>Training</h3>
				<p>I create video tutorials so that you won&#39;t have any problems managing your website&#39;s back-end.</p>
			</div>
		</div>
	</div>
	<div class="one-third">
		<div class="feature-box">
			<div class="feature-box-image">
				<img class="feature-box-img" src="https://lh3.googleusercontent.com/k6IlPxL_aKba2HNnGzlcofNaFwKATfLaKGaTONWQ_sA_dmyMXi5NGNIX2zL1SlZ6799OXETUKNtowNvPkr7N4PHTrYd8EBk2KwwqfT1pgjRuhu_7jW1bAYHbWLAOzFn8jBaQx3A7l4E3JKS0XfDleTtofDHEWPgos0BQAHjNZrlNuzdiJeBqV2uOiy5qS-8v3l02uIZ8ENz8ZAmIzG0D19w28p69U_IfHXS_ih0I75CDySoinTmfwGVyMWZ_vILj8t_H0aJ8bezgPdLTrUJZOuVxi5FCDliCb9zvX2DFr-eC4xsgXqLk6tet15_ma01nj_zmC5goYVy8DwVYCDw9PCv7xbxjm8iv3vocl9Pk_A8t85F7H1PajqVwDoAadAXj89PAFNSDjnseT-pUOkeLixBY1spy-ev2GtGVsQcrHmPhro-A5wOn6ZQw44DSjjj1A8DK7RFX8wcffXLhczBT0wbmtBeIUI6kIrfnNOMCc4e3C22DrcSk-fXgWVdM4mRMcgxgD6WOQwyb_u4AWIgmEfyH8gMyK-BPwpJRwVyRkgw=s128-no">
			</div>
			<div class="feature-box-text">
				<h3>Built to Last</h3>
				<p>I write clean code and use high quality plugins, so there will be no issue when it comes to upgrading.</p>
			</div>
		</div>
	</div>
</div>

<div class="for-home-contact-form">
	<div class="wrap">
		<div class="one-half first">
			<h1 id="for-home-contact-form-1">Let's</h1>
			<h1 id="for-home-contact-form-2">Talk</h1>
			<p>
				I’d love to hear about how I can help your business.<br/><br/>
				Please send me some information on your project so I can figure out how best to help you.<br/><br/>
				After confirming that I'm a good fit for your project, we shall schedule a Skype chat to discuss things in further details.
			</p>
		</div>
		<div class="one-half">
			<?php dynamic_sidebar( 'for-home-contact-form' ); ?>
		</div>
	</div>
</div>

<?php
