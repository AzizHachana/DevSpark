<style>
				.nav-item{
					cursor:pointer;
				}
				.bui-carousel__item_rec{
					cursor:pointer;
				}
				@keyframes scale-up {
  from {
    transform: scale(0.5);
  }
  to {
    transform: scale(1);
  }
}
	    				.owl-theme .owl-controls {
	    				    margin-top: 10px;
	    				    text-align: center;
	    				    -webkit-tap-highlight-color: transparent;
	    				}
	    				.main .owl-theme .owl-controls .owl-nav [class*="owl-"] {
	    				    background: #00335a !important;
	    				    width: 10%;
	    				    height: 10%;
	    				    line-height: 50%;
	    				    border-radius: 0;
	    				}
	    				.owl-theme .owl-controls .owl-nav [class*=owl-] {
	    				    color: #fff;
	    				    font-size: 14px;
	    				    font-weight: bold;
	    				    background: #00335a;
	    				    display: inline-block;
	    				    cursor: pointer;
	    				    -webkit-border-radius: 3px;
	    				    -moz-border-radius: 3px;
	    				    border-radius: 3px;
	    				    width: 3%;
	    				    height: 10%;
	    				    position: absolute;
	    				    background: #132e7f
	    				    border: 1px solid transparent;
	    				}
	    				.owl-controls .owl-nav .owl-prev {
	    				    left: -4%;
	    				    top: 50%;
	    				    -moz-transform: translate(0, -50%);
	    				    -o-transform: translate(0, -50%);
	    				    -ms-transform: translate(0, -50%);
	    				    -webkit-transform: translate(0, -50%);
	    				    transform: translate(0, -50%);
	    				}
	    				.main .owl-controls .owl-nav .owl-prev {
	    				    left: -5%;
	    				}
	    				.main .owl-prev .fa, .main .owl-next .fa {
	    				    font-size: 40px;
	    				    line-height: 45px;
	    				}

	    				.owl-prev .fa, .owl-next .fa {
	    				    display: block;
	    				}
	    				.main .owl-controls .owl-nav .owl-next {
	    				    right: -6%;

	    				}
	    				.owl-controls .owl-nav .owl-next {

	    				    right:6%;
	    				    top: 50%;
	    				    -moz-transform: translate(0, -50%);
	    				    -o-transform: translate(0, -50%);
	    				    -ms-transform: translate(0, -50%);
	    				    -webkit-transform: translate(0, -50%);
	    				    transform: translate(0, -50%);
	    				}
	    				.recent_searches__section {
	    				    padding: 0 5px;
	    				}
	    				.bui-spacer--largest {
	    				    margin-bottom: var(--bui_unit_largest)!important;
	    				}
	    				.bui-title {
	    				    display: -webkit-box;
	    				    display: -ms-flexbox;
	    				    display: -webkit-flex;
	    				    display: flex;
	    				    -webkit-box-orient: vertical;
	    				    -webkit-box-direction: normal;
	    				    -ms-flex-direction: column;
	    				    -webkit-flex-direction: column;
	    				    flex-direction: column;
	    				}
	    				.bui-spacer--large {
	    				    margin-bottom: var(--bui_unit_large)!important;
	    				}
	    				.bui-title--headline_2 .bui-title__text {
	    				    font-family:-apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
	    						font-style: normal;
	    						font-weight: 700;
	    						font-size: 24px;
	    						line-height: 32px;
									-webkit-font-smoothing: antialiased;
	    				}
	    				.bui-card {
	    						display: flex;
	    						background-color:inherit;
	    						color: #262626;
	    						/*border: 1px solid #e7e7e7;
	    						border-radius: 2px;*/
	    						padding: 16px;
	    						margin-right: 5%;
	    				    margin-left: 1%;
	    				    margin-top: 1%;
	    						border-color:#fff;
	    				}
	    				.bui-card__content {
	    						max-width: 100.8%;
	    						-webkit-box-flex: 1;
	    						flex-grow: 1;
	    						margin-left: 6%;
	    				}
	    				.bui-carousel {
	    						position: relative;
	    					}
	    					.bui-carousel__inner {
	    						list-style: none;
	    						padding: 0 16px;
	    						margin: 0;
	    						display: flex;
	    						flex-wrap: nowrap;
	    						-webkit-box-pack: start;
	    						justify-content: flex-start;
	    						width: 100%;
	    						overflow-x: hidden;
	    						scroll-behavior: smooth;
	    						backface-visibility: hidden;
	    						box-sizing: border-box;
	    				}
	    				.bui-carousel--medium .bui-carousel__item {
	    						width:26%;
	    				}
	    				.bui-carousel__item {
	    					width: 366px;
	    					height: 100px;
	    					left: 315px;
	    					top: 470px;
	    					background: #FFFFFF;
	    					box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.16);
	    					border-radius: 6px;
	    				}
	    				a.bui-card {
	    						text-decoration: none;
	    						color: #262626;
	    				}
	    				.bui-card--transparent {
	    						background-color: transparent;
	    						border: 0;
	    				}

	    				a.bui-card, a.bui-card:link {
	    						text-decoration: none;
	    						color: var(--bui_color_foreground);
	    				}
	    				.bui-card--transparent {
	    						background-color: transparent;
	    						border: 0;
	    				}
	    				.bui-card--media {
	    						-webkit-box-orient: vertical;
	    						-webkit-box-direction: normal;
	    						flex-direction: column;
	    						padding: 0;
	    				}
	    				.bui-carousel .bui-card__image-container {
	    						height: auto;
	    				}
	    				.bui-card--transparent .bui-card__image-container {
	    						border-radius: 2px;
	    				}
	    				.bui-card__image-container {
	    						position: relative;
	    						overflow: hidden;
	    				}
	    				.bui-card--transparent.bui-card--media .bui-card__image {
	    						margin: 0;
	    						box-shadow: 0 0 5px 1px rgb(181 182 182);
	    				}


	    				.bui-card--media .bui-card__image {
	    						width: 100%;
	    						height: 150px;
	    						object-fit: cover;
	    				}
	    				.bui-card__image {
	    						border: 0;
	    						flex-shrink: 0;
	    						display: block;
	    				}
	    				.recent-searches__image {
	        width: 64px;
	        height: 64px;
	        margin-right: <TMPL bui_spacing_3x>;
	        border-radius: 4px;
	    	}
	    				.product-card-small__info {
	    				background-color: hsla(0,0%,100%,.92);
	    				bottom: 81%;
	    				padding: 11px 5px 3px 5px;
	    				position: absolute;
	    				width: auto;
	    				margin-left:9px;
	    				border-radius: 2px;
	    				}
	    				.bui_font_strong, body .bui-f-font-strong, body .bui_font_strong {
	    					font-style: normal;
	    					font-weight: 600;
	    					font-size: 16px;
	    					line-height: 20px;
	    					color:#262626;
	    					font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;
								-webkit-font-smoothing: antialiased;
	    				}
	    				.bui-card__subtitle {
	    					font-style: normal;
	    						font-weight: 400;
	    						font-size: 14px;
	    						line-height: 20px;
	    				    font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;
	    				    color:#6B6B6B;
	    						 width: 101%;
									 -webkit-font-smoothing: antialiased;
	    				}

	            .title_avantage{
	              font-family: BlinkMacSystemFont,-apple-system,'Roboto',Helvetica, Arial, sans-serif;
	              font-style: normal;
	              font-weight: 700;
	              font-size: 18px;
	              line-height: 21px;
	              color: #262626;
	    					margin-bottom: 1%;
								-webkit-font-smoothing: antialiased;
	            }
	            .sous_title_avantage{
	              font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif
	              font-style: normal;
	              font-weight: 400;
	              font-size: 15px;
	              line-height: 18px;
	              color: #6B6B6B;
								-webkit-font-smoothing: antialiased;
	            }
	    				.row>* {
	    				    flex-shrink: 0;
	    				    width: 100%;
	    				    max-width: 100%;
	    				    padding-right: calc(var(--bs-gutter-x)/ 2);
	    				    padding-left: calc(var(--bs-gutter-x)/ 2);
	    				    margin-top: var(--bs-gutter-y);
	    				}
	              .navbar-expand-md .navbar-nav {
	    					    flex-direction: row;
	    					}
	    .navbar-nav {
	        display: flex;
	        flex-direction: column;
	        padding-left: 0;
	        margin-bottom: 0;
	        list-style: none;
	    }
	    .navbar {
	      flex-direction: row;
	        position: relative;
	        display: flex;
	        flex-wrap: wrap;
	        align-items: center;
	        justify-content: space-between;
	        padding-top: 0.5rem;
	        padding-bottom: 0.5rem;
	    }
	    .mega-dropdown {
	        position: static!important;
	    }
	    				.shadow{
	    					box-shadow:none !important;
	    				}
	    				.list-group-item-action:focus, .list-group-item-action:hover {
	    				    z-index: 1;
	    				    color: #495057;
	    				    text-decoration: none;
	    				    background-color: rgb(243, 245, 247) !important;
	    				}
	    				#nav_hotel{
	    					border-bottom: none !important;
	    				}
					/*Ellipsis*/
				.lds-ellips {
				  display: inline-block;
				  position: relative;
				  width: 64px;
				  height: 64px;
					top:-8% ;
					left:44%;
				}
				.lds-ellips div {
				  position: absolute;
				  top: 30px;
				  width: 11px;
				  height: 11px;
				  border-radius: 50%;
				  background: #fff;
				  animation-timing-function: cubic-bezier(0, 1, 1, 0);
				}

				.lds-ellips div:nth-child(1) {
				  left: 6px;
				  animation: lds-ellips1 0.6s infinite;
				}
				.lds-ellips div:nth-child(2) {
				  left: 6px;
				  animation: lds-ellips2 0.6s infinite;
				}
				.lds-ellips div:nth-child(3) {
				  left: 26px;
				  animation: lds-ellips2 0.6s infinite;
				}
				.lds-ellips div:nth-child(4) {
				  left: 45px;
				  animation: lds-ellips3 0.6s infinite;
				}
				@keyframes lds-ellips1 {
				  0% {
				    transform: scale(0);
				  }
				  100% {
				    transform: scale(1);
				  }
				}
				@keyframes lds-ellips3 {
				  0% {
				    transform: scale(1);
				  }
				  100% {
				    transform: scale(0);
				  }
				}
				@keyframes lds-ellips2 {
				  0% {
				    transform: translate(0, 0);
				  }
				  100% {
				    transform: translate(19px, 0);
				  }
				}
							@media only screen and (min-width:768px) and (max-width:1024px) and (orientation : portrait) {
								.ic_hotel{
	               	height: auto;
	               }
								.lds-ellips {
									top: -42% !important;
    							left: 40% !important;
								}
								.icon_menu_destination{
									margin-left: -46%;
								}
								.icon_menu_destination >img{
									transform: rotate(451deg);
								}
								.text-blueWave_hotel{
									margin-left:53%;
								}
								.text-blueWave_vorg{
									margin-left:47%;
								}
								.list_menu_hotel{
									margin-left: -38%;
    							margin-top: 2%;
								}
								.list_menu_vorg{
									margin-top: 11%;
									width: 100%;
									margin-left: -34%;
									position: absolute;
								}
								.list_menu_top_dest_mobile{
									margin-top: 7%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;
									/*margin-bottom: 2%;*/
								}
								.list-unstyled_mobile > li  {
									margin-bottom: 2%;
								}

								.col-megamenu_top_dest_mobile{
									margin-top: -9%;
    							margin-left: -9%;
								}


								.list_menu_autre_dest_mobile{
									margin-top: 81%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_autre_dest_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;
									/*margin-bottom: 2%;*/
								}
								.list-unstyled_autre_dest_mobile > li  {

									margin-bottom: 2%;
								}

								.col-megamenu_autre_dest_mobile{
									margin-top: -9%;
    								margin-left: -9%;
								}


								.list-unstyled_autre_dest_mobile > li :hover , .list-unstyled_mobile > li :hover{
									text-decoration: underline;
								}
								.icon_menu_autre_dest {
								    margin-top: -5%;
    								margin-left: 87%;
								}
								.icon_menu_autre_dest > img {
									transform: rotate(270deg);
								}



								.list_menu_offres_spec_mobile{
									margin-top: 182%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_offres_spec_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;
									/*margin-bottom: 2%;*/
								}
								.list-unstyled_offres_spec_mobile > li  {
									margin-bottom: 2%;
								}

								.col-megamenu_offres_spec_mobile{
									margin-top: -9%;
    							margin-left: -9%;
								}


								.list-unstyled_offres_spec_mobile > li :hover{
									text-decoration: underline;
								}
								.icon_menu_offres_spec {
								    margin-top: -5%;
    								margin-left: 87%;
								}
								.icon_menu_offres_spec > img {
									transform: rotate(270deg);
								}

								.list_menu_vol{
									width: 100%;
									position: absolute;
									margin-left: -45%;
									margin-top: 22%;
								}
								.text-blueWave{
									font-size:18px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
    								font-weight: 600;
								}
								.icon_menu_hotel {
									margin-top: -5%;
    							margin-left: 76%;
								}
								.icon_menu_top_dest {
									margin-top: -5%;
    							margin-left: 87%;
								}
								.icon_menu_top_dest > img {
									transform: rotate(270deg);
								}

								.icon_menu_vorg {
									margin-top: -5%;
    							margin-left: 74%;
								}
								.icon_menu_vol {
									margin-top: -5%;
    							margin-left: 85%;
								}
								.icon_menu_hotel>img,.icon_menu_vorg>img,.icon_menu_vol>img{
									transform: rotate(270deg);
								}
								.button_voyage_org,.button_hotel,.button_vol{
									border:none;
								}
								#rootSideNav{
									position: absolute;
									height: 2484px;
    							margin-top: -3.5%;
									margin-left: -12%;
								}
								#navbarCollapse{
									display: none !important;
								}
								.box_produit{
						 		 width:345px !important;
						 	 }
	              .navbarCollapse{
	                display: none;
	              }
	              .sidebar{
	    						margin-top:3.5%;
	    					}
	    					.box_produit {
		    					height:350px !important;
		              margin:0 0.22% 4.5% 2% !important;
	    					}
	    							 .contenu_et_sidebar, .slider{
	    								 margin-top:4.8%;
	    								 width:757px;
	    								 margin-left:2%;
	    							 }
	    							 .panel {
	    								 margin-top:3% !important;
	    								 margin-left:2%;
	    								 margin-right:1%;
	    							 }
	    							 .note_prix_vente{
	    								 /*margin-left:1%;*/
											 position: absolute;
											 width:95%;
	    							 }
	    							 .contenu_text_reservation{
	    								 margin-left:1%;
	    							 }
	    							 #ch2 {
	    									 border-left: 1px  solid #E2E7EB;
	    								 }
	    							 .checkin{
	    							 margin-left:0% !important;
	    							}
	    							.checkout{
	    								margin-left: 0% !important;
	    								/*margin-top: -2%;*/
	    							}
	    							.sou_bodym{
	    								width: 100%;
	    								height: 80px;
	    								background-color: #fff;
											margin-top: -2.6%;
											/*box-shadow: inset 0 -5px 5px -5px rgba(0,0,0,0.5);*/
	    							}
	    							 .sous_body{
	    							 margin-top:21.5%;
	                   width:100%;
	    						 }
	    						 .menu{
										 margin-top: -2%;
								     height: 77px;
								     width: 96% !important;
	    				 		}
	    				 		.menuf{
	    				 			position: absolute;
	    				 				min-width: 395px;
	    				 				max-width: 88%;
	    				 				width: 87%;
	    				 				left: 10%;
	    				 				/* margin: 0px auto; */
	    				 				height: 7%;
	    				 				clear: both;
	    				 				top: -2%;
	    				 		}
	    				 		.logo{
	    				 				float:left;
	    				 				margin-left:-1%;
	    				 				margin-top:5%;
	    				 				width:34%;
	    				 				height:30px;
	    				 		}
	    				 		.img_logo{
	    				 				width:100% !important;
	    				 				height: 100% !important;
	    				 		}
	    				 		.cordonne{
	    				 			position: absolute;
	    				 			width: 61%;
	    				 			top:5%;
	    				 			left: 37%;
	    				 			height: 50%;
	    				 		}
	    				 		.phone{
	    				 				width: 14%;
	    				 				height: 32px;
	    				 				float: left;
	    				 				background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/phone.svg);
	    				 				background-repeat: no-repeat;
	    				 				opacity: 1;
	    				 				position: relative;
	    				 				top: 75%;
	    				 				left: 59%;
	    				 				background-size: 36%;
	    				 				color:#262626;
	    				 				/*margin:14% 2% 0 12%;*/

	    				 		}
	    				 		.tlf{
	    				 			font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    				 			font-weight: 600;
	    				 			font-size: 20px;
	    				 			line-height: 8.53px;
	    				 			color: #262626;
	    				 			position: absolute;
	    				 			top: 109%;
	    				 			left: 74%;
	    				 		}
	    				 		.vl{
	    				 			position: absolute;
	    				 			 top: 72.5%;
	    				 			 border-left: 1px solid #262626;
	    				 			 height: 30px;
	    				 			 left: 54%;
	    				 		}
	                  .horaire {
	                  padding-top:2.5%;
	                  /* padding-bottom: 0.6%; */
	                  z-index: 21;
	                  position: absolute;
	                  width: 257px;
	                  height: 88px;
	                  left: 40%;
	                  margin-top: 16%;
	                  background: #FFFFFF;
	                  box-shadow: 0px 8px 16px rgb(38 38 38 / 34%);
	                  border-radius: 6px;
	                  z-index: 1000;
	              }
	              .horaire p {
									font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
							    font-style: normal;
							    font-weight: 400;
							    font-size: 14px;
							    line-height: 72.69%;
							    text-align: center;
							    color: #6B6B6B;
	    							}
	    				 		.adresse{
	                  width: 51px;
	                  height: 36px;
	                  left: 96.5%;
	                  top: 53.2%;
	                  position: absolute;
	    								 z-index: 10;
	    								 background-repeat: no-repeat;
	    								 background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg);
	    				 		}
	    				 		.jours{
	    				 				font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    				 				font-weight:400;
	    				 				font-size:14px;
	    				 				line-height:14.14px;
	    				 				color:#262626;
	    				 		}
	    				 		.heures{
	    				 				margin-top:-7.5%;
	    				 				font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    				 				font-weight:400;
	    				 				font-size:14px;
	    				 				line-height:14.14px;
	    				 				color:#262626;
	    				 		}
	                    .v312_1355 {
	                        width: 101%;
	                        height: auto;
	                        min-height: 1600px;
	                        background: url();
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 32px;
	                        left: 0px;
	                        overflow: hidden;
	                    }
	                    .v2_502 {
	                        width: 99%;
	                        height: 275px;
	                        background: url(https://tn.tunisiebooking.com/images/tablet-portraitf2-min.jpg);
	                        opacity: 1;
	                        background-size: cover;
	                        background-repeat: no-repeat;
	                        position: absolute;
	                        top: 1.5%;
	                        left: 0%;
	                    }
	                    .v148_1172 {
	                      width: 93%;
	                      height: 43px;
	                      left: 3%;
	                      right: 333px;
	                      position: absolute;
	                      top: 5%;
	                      background: rgba(255,255,255,1);
	                      opacity: 1;
	                      border-top-left-radius: 8px;
	                      border-top-right-radius: 8px;
	                     /* box-shadow: 0px 1px 11px rgb(0 0 0 / 24%);*/
	                      overflow: hidden;
	                      border-bottom: 1px solid #DDDDDD;
	                      z-index: 200;
	                    }
	                    .v153_31{
	                        width: 20%;
	                        height: 45px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 6% !important;
	                        left: 4% !important;
	                        overflow: hidden;
	                    }
	                    .v153_33 {
	                      top: 78% !important;
	                      width: 89% !important;
	                      opacity: 1;
	                      position: absolute;
	                      left: 2px;
	                      border: 2px solid rgba(255,0,151,1);
	                      background: #f40091;
	                    }
	                    .v153_35{
	                        /*width:13px !important;
	                        height:40px !important;*/
	                    }
	                    .v153_32{
	                        font-weight: 600 !important;
	                        font-size:16px !important;
	                        margin-left: -5px !important;
	                        top:0px !important;
	                    }
	                    .v153_11{
	                        top:21% !important;
	                        left:43% !important;
	                    }
											.v153_11_cir{
												 top:21% !important;
												 left:80.8% !important;
										 }

                     .v153_11_omra {
                       width: 173px;
                       height: 45px;
                       background-repeat: no-repeat;
                       background-position: center center;
                       background-size: cover;
                       opacity: 1;
                       position: absolute;
                       top: 24%;
                       left: 25.2%;
                       overflow: hidden;
                       cursor: pointer;
                     }






                     .v153_14_omra {
                       width: 26%;
                       height: 80px;
                       background: url(https://tn.tunisiebooking.com/images/icone-moteur/omrablack.svg);
                       background-repeat: no-repeat;
                       opacity: 1;
                       position: relative;
                       top: 0px;
                       left: 0px;
                       background-size: 100%;
                     }
                     .v153_14_omra:focus {
                        width: 15%;
                        height: 80px;
                        background: url(https://tn.tunisiebooking.com/images/icone-moteur/omrapink.svg);
                        background-repeat: no-repeat;
                        opacity: 1;
                        position: relative;
                        top: 0px;
                        left: 0px;
                        background-size: 100%;
                        zoom: 206%;
                     }

                     .v153_13_omra {
                       width: 55%;
                       height: 40px;
                       opacity: 1;
                       position: relative;
                       top: 1px;
                       left: 19px;
                       overflow: hidden;
                     }
                     .v153_13_omra:hover{

                       border-bottom: solid;
                       border-bottom-width: thick;
                     }
                     .v153_33_omra{

                       display: none;
                     }
                     .v153_33_omra:hover{
                       width: 54%;
                       opacity: 1;
                       position: absolute;
                       top: 90%;
                       border: 2px solid #262626;
                       background: #262626;
                       display: flex;
                     }

                     .v153_15_omra{

                     }
                     .v153_12_omra{
                      width: 133px;
                      color: #262626;
                      position: absolute;
                      top: 1px;
                      left:-4px;
                      font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif;
                      font-size: 16px;
                      opacity: 1;
                      text-align: center;
                      font-weight: 400;
                       }


	                    .v153_14{
	                        width:15px !important;
	                        height:40px !important;
	                    }
											.v153_14_cir{
												 width:12px !important;
												 height:40px !important;
										 }
	                    .v153_12{
	                        font-size: 15px !important;
	                        left:25px !important;
	                        top:0px !important;
	                    }
											.v153_12_cir{
												 font-size: 15px !important;
												 left:-7px !important;
												 top:0px !important;
										 }
	                    .v153_16{
	                        top:-3% !important;
                          left: 67.5% !important;
	                    }
	                    .v153_30{
	                        width:29px !important;
	                        height:40px !important;
	                    }
	                    .v153_22{
	                        top:9px !important;
	                        left:39px !important;
	                    }
	                    .v94_8 {
	                        width: 410px;
	                        height: 20px;
	                        color: rgba(255,255,255,1);
	                        position: absolute;
	                        display: flex;
	                        top: 3%;
	                        left: 24%;
	                        text-shadow: 0px 1px 4px rgb(0 0 0 / 20%);
	                        font-family:-apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
	                        font-weight: 700;
	                        font-size: 24px;
	                        line-height: 15.36px;
	                        opacity: 1;
	                        text-align: center;
	                        -webkit-font-smoothing: antialiased;
	                    }
	                    .v94_9{
	                      display: none;
	                    }
	                    .v37_34 {
	                        width: 93%;
	                        height: 159px;
	                        background: url();
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 7.6%;
	                        left: 3%;
	                        overflow: hidden;
	                        border-bottom-left-radius: 8px;
	                        border-bottom-right-radius: 8px;
	                        /*box-shadow: 0px 1px 11px rgb(0 0 0 / 24%);*/
	    										z-index:100;
	                    }
	                    .v128_1118 {
	                        width: 100%;
	                        height: 160px;
	                        background: #fff;
	                        opacity: 1;
	                        position: absolute;
	                        overflow: hidden;
	                    }
	                    .v37_38 {
	                        width: 48.2%;
	                        height: 43px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        margin-top: 3.5%;
	                        left: 3%;
	                        overflow: hidden;
	                        z-index:20;
	    										border-radius:6px;
	    										border: 1.2px solid #DDDDDD;
	                    }
	                    .v37_45 {
	                        width: 100%;
	                        height: 43px;
	                        background: rgba(243,245,247,1);
	                        opacity: 1;
	                        position: relative;
	                        top: 0px;
	                        left: 0px;

	                        border-radius: 2px;
	                        box-shadow: 0px 3px 18px rgb(0 0 0 / 12%);
	                        overflow: hidden;
	                    }
	                    .v37_47 {
	                        width: 263px;
	                        color: rgba(38,38,38,1);
	                        position: absolute;
	                        top: 16%;
	                        left: 38.76px;
	                        font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                        font-weight: Regular;

	                        opacity: 1;
	                        text-align: left;
	                    }
	                    .select_destination_moteur {
	                        width: 100%!important;
	                        border: none !important;
	                        background-color: rgba(243,245,247,1) !important;
	                        font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                        font-size: 15px;
	                        font-weight: 400;
	                        outline: none;
	                        line-height: 16px;
	    										margin-top:1.5%;
	                    }
	                    .select_destination_moteur::placeholder {
	                        color:#262626;
	                    }
	                    .v64_167 {
	                        width: 13px;
	                        height: 20px;
	                        opacity: 1;
	                        position: absolute;
	                        top: 24%;
	                        left: 14px;
	                    }
	                     .v37_67 {
	                        height:90% !important;
	                        top:13% !important;
	                        width: 100% !important;
	                        left: -3%!important;

	                        position: absolute !important;
	                    }
	                    .v37_72 {
	                        width: 46%;
	                        height: 43px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: relative;
	                        top: 3%;
	                        left: 56.5%;
	                        overflow: hidden;
	                    }
	                      .v37_74 {
	                        top:20px !important;
	                        left:41px !important;
	                      }
	                     .v37_73{
	                        height: 43px !important;
	                        width:45% !important;
	    										cursor: pointer;
	                    }
	                    .v37_75{
	                        top:0px !important;
	                        left:29% !important;
	                    }
	                    .col_dep
	                    {
	                        width:45% !important;
	                        top:-100% !important;
	                        height:43px !important;
	                        left:49.8% !important;
	                    }

	                    .v165_156{

	                        width: 48.2%;
	                        height: 43px;
	                        background: rgba(243,245,247,1);
	                        opacity: 1;
	                        position: relative;
	                        margin-top: 3.5%;
	                        left: 6%;
	                        border: 1.2px solid #DDDDDD;
	                        border-radius: 6px;
	                    }
											.champs_dest{
												height: 43px !important;
											}
	                    .v162_15{
	                        top:27% !important;
	                    }
	                    .v64_170_ch{
	                        top:14% !important;
	                    }
	                    .repations_chambres {
	                      margin-left: 6.2% !important;
	                      right: 19px !important;
	                      top: 55.6% !important;
	                      margin-top: -21% !important;
	                    }
	                    .tous_les_chambres {
	                        width: 43% !important;

													margin-top: -28.5%;
	                    }
	                    .repartition_une_ch{
	                        float: left;
	                        width: 319px;
	                        height: 249px;

	    										border-radius:5px;
	                    }
	                    .nombre_adultes{
	                        margin-right: -5% !important;
	                    }
	                    .nombre_enfants{
	                        margin-right: -5% !important
	                    }
	                    .v87_280{
	                        top:28% !important;
	                    }

	                    .v194_21 {

	                        left: 16% !important;
	                        top: 16.9% !important;
	                        width: 20%!important;
	                        position: absolute;
	                    }
	                    .v194_23{
	                      top: 53% !important;
	                      left: 192% !important;
	                    }
	                    .v194_22{
	                      width: 200.2% !important;
	                      height: 43px !important;
	                      margin-top: -39% !important;
	                      z-index: 100;
	                    }


	    								.v194_22:hover{
	    									background-color: #f40091;
	    									background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    									background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    									background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    									background-size: 300px;
	    								}
	    								.v153_33_v_org {
	                      width: 84%;

	                      opacity: 1;
	                      position: absolute;
	                      top: 72%;
	                      left: 2px;
	                      border: 2px solid #262626;
	                      background: #262626;
	    								}
											.v153_33_cir {
												width: 50%;

												opacity: 1;
												position: absolute;
												top: 72%;
												left: 2px;
												border: 2px solid #262626;
												background: #262626;
											}
	    								.v153_33_vol {
	                      width: 86%;

	                      opacity: 1;
	                      position: absolute;
	                      top: 77%;
	                      left: 6px;
	                      border: 2px solid #262626;
	                      background: #262626;
	    								}
	                    .title_avantage{
	                      font-size:16px;
	                      margin-left: -1%;
	                    }
	                    .sous_title_avantage {
	                      font-size:14px;
	                      margin-left: -6%;
	                    }
											[dir=ltr] .ltr\:border-r-1 {
											    border-right-width: 1px;
											}

											.border-grey {
											    --tw-border-opacity: 1;
											    border-color: hsl(var(--color-grey)/var(--tw-border-opacity));
											}
											.header_humberger{
												float: left;
    										margin-left: -8%;
												position: absolute;

												margin-top:5.5%;
												display: block !important;
											}
											.items-center {
											    align-items: center;
											}
											.h-full {
											    height: 50%;
											}
											.flex {
											    display: flex;
											}
											.text-black {
											    --tw-text-opacity: 1;
											    color: hsl(var(--color-black)/var(--tw-text-opacity));
													background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-menu.svg);
													background-repeat: no-repeat;
													border:none;

											}

											.p-15 {
											    padding: 0.9375rem;
											}
											.sr-only {
											    position: absolute;
											    width: 1px;
											    height: 1px;
											    padding: 0;
											    margin: -1px;
											    overflow: hidden;
											    clip: rect(0,0,0,0);
											    white-space: nowrap;
											    border-width: 0;
											}
											.hamburger {
												 position: relative;
												 background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-menu.svg)
											}
											.bg-white {
											    --tw-bg-opacity: 1;
											    background-color: hsl(var(--color-white)/var(--tw-bg-opacity));
											}
											.overflow-y-scroll {
											    overflow-y: scroll;
											}
											.w-full {
												width: 100%;
												-webkit-appearance: button;
												background-color: transparent;
												background-image: none;
												display: block !important;
												position: absolute;
												z-index: 100000;

											}
											.text-blueWave {
											    --tw-text-opacity: 1;
											    color: hsl(var(--color-blue-wave)/var(--tw-text-opacity));
											}
											menu, ol, ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}

											.uppercase {
											    text-transform: uppercase;
											}

	                 }

									 @media only screen and (min-width:800px) and (max-width:1024px) and (orientation : portrait) {
										 .v194_23 {
                        top: 61% !important;
                        left: 188% !important;
                        margin-top: 4%;
}
										.ic_hotel{
	                     height: auto;
	                   }
										.text-blueWave{
											padding-left:3%;
										}
										.overflow-y-scroll{
											margin-top: -1%;
										}
										#rootSideNav{
											height: 2498px !important;
											margin-top: -2.8% !important;
										}
										.w-full {
										}
										 .v2_502 {
												 width: 100%;
												 height: 275px;
												 background: url(https://tn.tunisiebooking.com/images/tablet-portraitf2-min.jpg);
												 opacity: 1;
												 background-size: cover;
												 background-repeat: no-repeat;
												 position: absolute;
												 top: 1.5%;
												 left: 0%;
										 }
										 .box_produit{
									 	 width:372px !important;
									  }
										 .sous_body{
										 margin-top:21.5%;
										 width:101%;
									 }
									 .sou_bodym{
										 width: 100%;
										 height: 80px;
										 background-color: #fff;
										 margin-top: -2.6%;

									 }
										 .tous_les_chambres {
												width: 46% !important;

												margin-top: -31%;
										}
									 }
	                 a only screen and (min-width: 1241px) and (max-width: 1399px){
	                  .adresse {

	                      margin-left: 99.2% !important;
	                  }
	                 }
									 @media only screen and (min-width:768px) and (max-width:1024px) and (orientation : landscape) {
										.ic_hotel{
	                     height: auto;
	                   }
										 .lds-ellips {
		 									top: -29% !important;
		     							left: 35% !important;

		 								}
										.icon_menu_destination{
									margin-left: -46%;
								}
								.icon_menu_destination >img{
									transform: rotate(451deg);
								}

								.text-blueWave_hotel{
									margin-left:53%;
								}
								.text-blueWave_vorg{
									margin-left:47%;
								}
								.list_menu_hotel{
									margin-left: -38%;
    								margin-top: 2%;
								}
								.list_menu_vorg{
									margin-top: 11%;
									width: 100%;
									margin-left: -34%;
									position: absolute;
								}
								.list_menu_top_dest_mobile{
									margin-top: 7%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;

								}
								.list-unstyled_mobile > li  {

									margin-bottom: 2%;
								}

								.col-megamenu_top_dest_mobile{
									margin-top: -9%;
    								margin-left: -9%;
								}


								.list_menu_autre_dest_mobile{
									margin-top: 81%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_autre_dest_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;

								}
								.list-unstyled_autre_dest_mobile > li  {

									margin-bottom: 2%;
								}

								.col-megamenu_autre_dest_mobile{
									margin-top: -9%;
    								margin-left: -9%;
								}


								.list-unstyled_autre_dest_mobile > li :hover , .list-unstyled_mobile > li :hover{
									text-decoration: underline;
								}
								.icon_menu_autre_dest {
								    margin-top: -5%;
    								margin-left: 87%;
								}
								.icon_menu_autre_dest > img {
									transform: rotate(270deg);
								}



								.list_menu_offres_spec_mobile{
									margin-top: 182%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_offres_spec_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;

								}
								.list-unstyled_offres_spec_mobile > li  {

									margin-bottom: 2%;
								}

								.col-megamenu_offres_spec_mobile{
									margin-top: -9%;
    								margin-left: -9%;
								}


								.list-unstyled_offres_spec_mobile > li :hover{
									text-decoration: underline;
								}
								.icon_menu_offres_spec {
								    margin-top: -5%;
    								margin-left: 87%;
								}
								.icon_menu_offres_spec > img {
									transform: rotate(270deg);
								}

								.list_menu_vol{
									width: 100%;
									position: absolute;
									margin-left: -45%;
									margin-top: 22%;
								}
								.text-blueWave{
									font-size:18px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
    								font-weight: 600;
								}
								.icon_menu_hotel {
									margin-top: -5%;
    								margin-left: 76%;
								}
								.icon_menu_top_dest {
									margin-top: -5%;
    								margin-left: 87%;
								}
								.icon_menu_top_dest > img {
									transform: rotate(270deg);
								}

								.icon_menu_vorg {
									margin-top: -5%;
    								margin-left: 74%;
								}
								.icon_menu_vol {
									margin-top: -5%;
    								margin-left: 85%;
								}
								.icon_menu_hotel>img,.icon_menu_vorg>img,.icon_menu_vol>img{
									transform: rotate(270deg);
								}
								.button_voyage_org,.button_hotel,.button_vol{
									border:none;

								}
								#rootSideNav{
									position: absolute;
									height: 2464px;
    								margin-top: -4.2%;
									margin-left: -13%;
								}
								#navbarCollapse{
									display: none !important;
								}
								.box_produit{
						 		 width:345px !important;
								 height:388px;
						 	 }
	              .navbarCollapse{
	                display: none;
	              }
	    							 .checkin{

	    							 margin-top: -2%;
	    							}
	    							.checkout{

	    								margin-top: -2%;
	    							}
	    							.slider{
	    								width:91%;
	    								margin-top:4%;
	    							}
	    							.contenu_et_sidebar{
	    								width:91%;
	    								position:relative;
	    								z-index: 20;
	    								margin-top:-4%;
	    							}
	    							.contenu{
	    								width:67%;
	    							}
	    							.box_produit{
	    								width:47%;
	    							}
	    							.sidebar{
	    								width:33%;
	    							}
	    							.sous_body{
	    								margin-top:24.5%;
										width:100%;
	    							}
	    							.sou_bodym {
	    								 width: 100%;
	    								 height: 82px;
	    								 background-color: #fff;

	    						 }
	    								.menu{
	    										margin-top:-1%;
	    										max-height: 80px;
	    									 background-color: #fff;
	    								}
	    								.menuf{
	    								 position: absolute;
	    								 min-width: 395px;
	    								 max-width: 87%;
	    								 width: 86%;
	    								 left: 11%;

	    								 height: 90 px;
	    								 clear: both;
	    								 top: 0.8%;
	    								}
	    								.logo{
	    										float:left;
	    										margin-left:0%;
	    									 margin-top:1.3%;
	    								}
	    							 .cordonne{
										position: absolute;
										width: 28%;
										margin-left: 75%;
										height: 50%;
	    							 }
	    							 .phone{
	    								 width:25px;
	    									 float: left;
	    									 background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/phone.svg);
	    									 background-repeat: no-repeat;
	    									 background-position: right;
	    									 min-height: 100%;
	    									 background-size: 25px 35px;
	    									 margin-right: 20px;
	    									 color:#262626;
	    									 position: absolute;
	    									 top:75%;
	    									 left:17%;

	    							 }
	    							 .tlf
	    							 {
	    									 font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    									 font-weight: 600;
	    									 font-size:24px;
	    									 line-height: 8.53px;
	    									 color:#262626;
	    									 position: absolute;
	    									 top:114.5%;

	    									 height: 30px;
	    									 left: 29%;

	    							 }
	    							 .vl{
	    									 position: absolute;
	    									 top:45.5%;
	    									 border-left:1px solid #262626;
	    									 height: 30px;
	    									 left: 51%;
	    							 }
	    							 .adresse{
										width: 51px;
										height: 36px;
										left: 96.5%;
    									top: 47.2%;
										position: absolute;
										z-index: 10;
										background-repeat: no-repeat;
										background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg);
	    							 }
	    							 .jours{
	    									 font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    									 font-weight:400;
	    									 font-size:15px;
	    									 line-height:18px;
	    									 color:#262626;
	    							 }
	    							 .heures{
	    									 margin-top:-6.5%;
	    									 font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    									 font-weight:400;
	    									 font-size:15px;
	    									 line-height:18px;
	    									 color:#262626;
	    							 }
	                    .v312_1355 {
	                        width: 100%;
	                        height: auto;
	                        min-height: 1500px;
	                        background: url();
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 46px;
	                        left: 0px;
	                        overflow: hidden;
	                    }
	                    .v2_502 {
	                        width: 100%;
	                        height: 268px;
	                        background: url(https://tn.tunisiebooking.com/images/tablet-paysagef1-min.jpg);
	                        opacity: 1;
	                        background-size: cover;
	                        background-repeat: no-repeat;
	                        position: absolute;
	                        top: 1.5%;
	                        left: 0%;
	                    }
	                    .v148_1172 {
							width: 95%;
							height: 43px;
							left: 2.5%;
							right: 333px;
							position: absolute;
							top: 6%;
							background: rgba(255,255,255,1);
							opacity: 1;
							border-top-left-radius: 8px;
							border-top-right-radius: 8px;

							overflow: hidden;
							border-bottom: 1px solid #DDDDDD;
							z-index: 200;
	                    }
	                    .v153_31{
	                        width: 138px;
	                        height: 45px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 6% !important;
	                        left: 14.3% !important;
	                        overflow: hidden;
	                    }
	                    .v153_33 {
	                        top: 79% !important;
	                        width:93% !important;
	                        opacity: 1;
	                        position: absolute;
	                        left: 2px;
	                        border: 2px solid rgba(255,0,151,1);
	                        background: #f40091;
	                    }
	                    .v153_35{

	                    }
	                    .v153_32{
	                        font-weight: 600 !important;
	                        font-size:16px !important;
	                        margin-left: -1px !important;
	                        top:0px !important;
	                    }
	                    .v153_11{
	                        top:25% !important;
	                        left:36.5% !important;
	                    }
											.v153_11_cir{
	                        top:25% !important;
	                        left:76.5% !important;
	                    }
	                    .v153_14{

	                    }
	                    .v153_12{
	                        font-size: 15px !important;
	                        left:25px !important;
	                        top:0px !important;
	                    }
											.v153_12_cir{
	                        font-size: 15px !important;
	                        left:-3px !important;
	                        top:0px !important;
	                    }
	                    .v153_16{
	                        left:60.2% !important;
	                        top:-1% !important;
	                    }
	                    .v37_74 {
	                      top:20px !important;
	                      left:41px !important;
	                    }
	                    .v153_30{
	                                     }
	                    .v153_22{
	                        top:9px !important;
	                        left:39px !important;
	                    }
	                    .v94_8 {
	                        width: 410px;
	                        height: 20px;
	                        color: rgba(255,255,255,1);
	                        position: absolute;
	                        display: flex;
	                        top: 2.5%;
	                        left: 30%;
	                        text-shadow: 0px 1px 4px rgb(0 0 0 / 20%);
	                        font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                        font-weight: 700;
	                        font-size: 24px;
	                        opacity: 1;
	                        text-align: center;
	                        -webkit-font-smoothing: antialiased;
	                    }
						.v94_9 {
							display: none;
						}
	                    .v37_34 {
	                        width: 95%;
	                        height: 144px;
	                        background: url();
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 8.6%;
	                        left: 2.5%;
	                        overflow: hidden;
	                        border-bottom-left-radius: 8px;
	                        border-bottom-right-radius: 8px;

	    										z-index:100;
	                    }
	                    .v128_1118 {
	                        width: 100%;
	                        height: 144px;
	                        background: #fff;
	                        opacity: 1;
	                        position: absolute;
	                        overflow: hidden;
	                    }
	                    .v37_38 {
	                        width: 375px !important;
	                        height: 47px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 14.5%;
	                        left: 2%;
	                        overflow: hidden;
	                        z-index:20;
	    										border-radius:6px;
	    										border: 1.2px solid #DDDDDD;
	                    }
	                    .v37_45 {
	                        width: 100%;
	                        height: 47px;
	                        background: rgba(243,245,247,1);
	                        opacity: 1;
	                        position: relative;
	                        top: 0px;
	                        left: 0px;

	                        border-radius: 2px;
	                        box-shadow: 0px 3px 18px rgb(0 0 0 / 12%);
	                        overflow: hidden;
	                        }
	                    .v37_47 {
	                        width: 263px;
	                        color: rgba(38,38,38,1);
	                        position: absolute;
	                        top: 17%;
	                        left: 38.76px;
	                        font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                        font-weight: Regular;

	                        opacity: 1;
	                        text-align: left;
	                    }
	                    .v37_47 {
	                        width: 263px;
	                        color: rgba(38,38,38,1);
	                        position: absolute;
	                        top: 17%;
	                        left: 38.76px;
	                        font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                        font-weight: Regular;

	                        opacity: 1;
	                        text-align: left;
	                    }
	                    .select_destination_moteur {
	                        width: 100%!important;
	                        border: none !important;
	                        background-color: rgba(243,245,247,1) !important;
	                        font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                        font-size: 15px;
	                        font-weight: 400;
	                        outline: none;
	                        line-height: 16px;
	    										margin-top:1%;
	                    }
	                    .select_destination_moteur::placeholder {
	                        color:#262626;
	                    }
	                     .v64_167 {
	                        width: 13px;
	                        height: 20px;
	                        opacity: 1;
	                        position: absolute;
	                        top: 19%;
	                        left: 14px;
	                    }
	                     .v37_67 {
	                        height: 90% !important;
	                        top: 13% !important;
	                        width: 100% !important;
	                        left: -3%!important;

	                        position: absolute !important
	                     }
	                     .v37_72 {
	                        width: 39%;
	                        height: 58px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: relative;
	                        top: -5%;
	                        left: 44.6%;
	                        overflow: hidden;
	                    }
	                    .v37_73{
	    									cursor: pointer;
	                        height: 47px !important;
	                        width:175px!important;
	                        top:16% !important;
	                    }
	                    .v37_75{
	                        top: 0px !important;
	                        left: 29% !important;
	                    }
	                    .col_dep
	                    {
	    										cursor:pointer;
	                        width:175px !important;
	                        top:-63% !important;
	                        height:47px !important;
	                        left:49% !important;
	                    }

	                    .v165_156{

	                        width: 375px !important;
	                        height: 47px;
	                        background: rgba(243,245,247,1);
	                        opacity: 1;
	                        position: relative;
	                        margin-top: 0.5%;
	                        left: 5%;
	                        border: 1.2px solid #DDDDDD;
	                        border-radius: 6px;
	                    }
											.champs_dest{
												height: 47px !important;
											}
	                    .v162_15{
	                        top:27% !important;
	    										left:92% !important;
	                    }
	                    .v64_170_ch{
	                        top:13% !important;
	                    }
	                    .repations_chambres {
	                        margin-left: 4.2% !important;
	                        right: 5% !important;
	                        top:-44% !important;
	                    }
	                    .tous_les_chambres {
	                        width: 36% !important;

	                    }
	                    .repartition_une_ch{
	                        float: left;
	                        width: 308px;
	                        height: 249px;
	                        margin-top:0.5%;
	    										border-radius:5px;
	                    }
	                    .nombre_adultes{
	                        margin-right: -5% !important;
	                    }
	                    .nombre_enfants{
	                        margin-right: -5% !important
	                    }
	                    .v87_280{
	                        top:22% !important;
	                    }

	                    .v194_23{
	                    top:81% !important;
	                    left:60% !important;
	    								width:175px !important;
	                    }
	    								.v194_22:hover{
	    									background-color: #f40091;
	    									background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    									background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    									background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    									background-size: 300px;
	    								}
	                    .v194_22{
	                        width:175px !important;
	                        height: 47px !important;
							margin-top: -163.7% !important;
							margin-left: 368.8% !important;
							z-index: 100;
							font-size: 18px !important;
	                    }
	    								.v153_33_v_org {
	    										width: 86%;

	    										opacity: 1;
	    										position: absolute;
	    										top: 68%;
	    										left: 2px;
	    										border: 2px solid #262626;
	    										background: #262626;
	    								}
											.v153_33_cir {
	    										width: 52%;

	    										opacity: 1;
	    										position: absolute;
	    										top: 68%;
	    										left: 2px;
	    										border: 2px solid #262626;
	    										background: #262626;
	    								}
	    								.v153_33_vol {
	    										width: 80%;

	    										opacity: 1;
	    										position: absolute;
	    										top: 76%;
	    										left: 6px;
	    										border: 2px solid #262626;
	    										background: #262626;
	    								}
										.border-grey {
											    --tw-border-opacity: 1;
											    border-color: hsl(var(--color-grey)/var(--tw-border-opacity));
											}
											.header_humberger{
												float: left;
    										margin-left: -8%;
												position: absolute;

												margin-top:2%;
												display: block !important;
											}
											.items-center {
											    align-items: center;
											}
											.h-full {
											    height: 50%;
											}
											.flex {
											    display: flex;
											}
											.text-black {
											    --tw-text-opacity: 1;
											    color: hsl(var(--color-black)/var(--tw-text-opacity));
													background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-menu.svg);
													background-repeat: no-repeat;
													border:none;

											}

											.p-15 {
											    padding: 0.9375rem;
											}
											.sr-only {
											    position: absolute;
											    width: 1px;
											    height: 1px;
											    padding: 0;
											    margin: -1px;
											    overflow: hidden;
											    clip: rect(0,0,0,0);
											    white-space: nowrap;
											    border-width: 0;
											}
											.hamburger {
												 position: relative;
												 background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-menu.svg)
											}
											.bg-white {
											    --tw-bg-opacity: 1;
											    background-color: hsl(var(--color-white)/var(--tw-bg-opacity));
											}
											.overflow-y-scroll {
											    overflow-y: scroll;
											}
											.w-full {
												width: 100%;
												-webkit-appearance: button;
												background-color: transparent;
												background-image: none;
												display: block !important;
												position: absolute;
												z-index: 100000;

											}
											.text-blueWave {
											    --tw-text-opacity: 1;
											    color: hsl(var(--color-blue-wave)/var(--tw-text-opacity));
											}
											menu, ol, ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}

											.uppercase {
											    text-transform: uppercase;
											}
	                }

	                @media only screen and (min-width:1025px) and (max-width:1240px) {
										.slick-slide {
											margin-left:69px !important;
										}
										.ic_hotel{
	                     height: auto;
	                   }
										 .lds-ellips {
												top:-38% !important ;
												left:34% !important;
											}
											.icon_menu_destination{
												margin-left: -46%;
											}
											.icon_menu_destination >img{
												transform: rotate(451deg);
											}
											.text-blueWave_hotel{
												margin-left:53%;
											}
								.text-blueWave_vorg{
									margin-left:47%;
								}
								.list_menu_hotel{
									margin-left: -38%;
    								margin-top: 2%;
								}
								.list_menu_vorg{
									margin-top: 11%;
									width: 100%;
									margin-left: -34%;
									position: absolute;
								}
								.list_menu_top_dest_mobile{
									margin-top: 7%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;

								}
								.list-unstyled_mobile > li  {

									margin-bottom: 2%;
								}

								.col-megamenu_top_dest_mobile{
									margin-top: -9%;
    								margin-left: -9%;
								}


								.list_menu_autre_dest_mobile{
									margin-top: 81%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_autre_dest_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;

								}
								.list-unstyled_autre_dest_mobile > li  {

									margin-bottom: 2%;
								}

								.col-megamenu_autre_dest_mobile{
									margin-top: -9%;
    								margin-left: -9%;
								}


								.list-unstyled_autre_dest_mobile > li :hover , .list-unstyled_mobile > li :hover{
									text-decoration: underline;
								}
								.icon_menu_autre_dest {
								    margin-top: -5%;
    								margin-left: 87%;
								}
								.icon_menu_autre_dest > img {
									transform: rotate(270deg);
								}



								.list_menu_offres_spec_mobile{
									margin-top: 182%;
									width: 100%;
									margin-left: -3%;
									position: absolute;
								}
								.list-unstyled_offres_spec_mobile > li > a {
									color:#262626;
									font-size: 15px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
									font-weight: 400;

								}
								.list-unstyled_offres_spec_mobile > li  {

									margin-bottom: 2%;
								}

								.col-megamenu_offres_spec_mobile{
									margin-top: -9%;
    								margin-left: -9%;
								}


								.list-unstyled_offres_spec_mobile > li :hover{
									text-decoration: underline;
								}
								.icon_menu_offres_spec {
								    margin-top: -5%;
    								margin-left: 87%;
								}
								.icon_menu_offres_spec > img {
									transform: rotate(270deg);
								}

								.list_menu_vol{
									width: 100%;
									position: absolute;
									margin-left: -45%;
									margin-top: 22%;
								}
								.text-blueWave{
									font-size:18px;
									font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
    								font-weight: 600;
								}
								.icon_menu_hotel {
									margin-top: -5%;
    								margin-left: 76%;
								}
								.icon_menu_top_dest {
									margin-top: -5%;
    								margin-left: 87%;
								}
								.icon_menu_top_dest > img {
									transform: rotate(270deg);
								}

								.icon_menu_vorg {
									margin-top: -5%;
    								margin-left: 74%;
								}
								.icon_menu_vol {
									margin-top: -5%;
    								margin-left: 85%;
								}
								.icon_menu_hotel>img,.icon_menu_vorg>img,.icon_menu_vol>img{
									transform: rotate(270deg);
								}
								.button_voyage_org,.button_hotel,.button_vol{
									border:none;

								}
								#rootSideNav{
									position: absolute;
									height: 2464px;
    								margin-top: -4.2%;
									margin-left: -13%;
								}
								#navbarCollapse{
									display: none !important;
								}
								.box_produit{
						 		 width:399px !important;
						 	 }
	              .navbarCollapse{
	                display: none;
	              }
				  		.v94_9 {
    						display: none;
						}
	    				.checkin{
	    					margin-left: 5%;
	    					margin-top: -2%;
								font-size:14px !important;
	    				}
	    						 .checkout{
	    							 margin-left: 5%;
	    							 margin-top: -2%;
										 	font-size:14px !important;
	    						 }
	    						 .slider{
	    							 width:94%;
	    						 }
	    						 .contenu_et_sidebar{
	    							 width:91%;
	    							 position:relative;
	    							 z-index: 20;
	    						 }
	    						 .contenu{
	    							 width:67%;
	    						 }
	    						 .box_produit{
	    							 width:47%;
	    						 }
	    						 .sidebar{
	    							 width:33%;
	    						 }
	    						 .sous_body{
	    							 margin-top:3%;
	    						 }
	    						 .sou_bodym {
	    								width: 100%;
	    								height: 323px;
	    								background-color: #fff;

	    						}
	    							 .menu{
	    									 margin-top:-1%;
	    									 max-height: 80px;
	    									background-color: #fff;
	    							 }
	    							 .menuf{
	    								position: absolute;
	    								min-width: 395px;
	    								max-width: 87%;
	    								width: 86%;
	    								left: 11%;

	    								height: 90 px;
	    								clear: both;
	    								top: 0.8%;
	    							 }
	    							 .logo{
	    								float: left;
										margin-left: 1%;
										margin-top: 1%;
	    							 }
	    							.cordonne{
	    								position:absolute;
	    								width:35%;
	    								margin-left:67%;
	    								height: 50%;
	    							}
	    							.phone{
	    								width:25px;
	    									float: left;
	    									background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/phone.svg);
	    									background-repeat: no-repeat;
	    									background-position: right;
	    									min-height: 100%;
	    									background-size: 25px 35px;
	    									margin-right: 20px;
	    									color:#262626;
	    									position: absolute;
	    									top: 89%;
    										left: 41%;

	    							}
	    							.tlf
	    							{
	    									font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    									font-weight: 600;
	    									font-size:24px;
	    									line-height: 8.53px;
	    									color:#262626;
	    									position: absolute;
	    									top:116.5%;

	    									height: 30px;
	    									left: 50%;

	    							}
	    							.vl{
	    									position: absolute;
	    									top:45.5%;
	    									border-left:1px solid #262626;
	    									height: 30px;
	    									left: 51%;
	    							}
	    							.adresse {
										width: 51px;
										height: 36px;
										left: 96.5%;
										top: 47.2%;
										position: absolute;
										z-index: 10;
										background-repeat: no-repeat;
										background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg);
									}
	    							.jours{
	    									font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    									font-weight:400;
	    									font-size:15px;
	    									line-height:18px;
	    									color:#262626;
	    							}
	    							.heures{
	    									margin-top:-6.5%;
	    									font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    									font-weight:400;
	    									font-size:15px;
	    									line-height:18px;
	    									color:#262626;
	    							}
	                  .v312_1355 {
	                      width: 100%;
	                      height: auto;
	                      min-height: 1500px;
	                      background: url();
	                      background-repeat: no-repeat;
	                      background-position: center center;
	                      background-size: cover;
	                      opacity: 1;
	                      position: absolute;
	                      top: 46px;
	                      left: 0px;
	                      overflow: hidden;
	                  }
	                  .v2_502 {
	                      width: 100%;
	                      height: 268px;
	                      background: url(https://tn.tunisiebooking.com/images/tablet-paysagef1-min.jpg);
	                      opacity: 1;
	                      background-size: cover;
	                      background-repeat: no-repeat;
	                      position: absolute;
	                      top: 1.5%;
	                      left: 0%;
	                  }
	                  .v148_1172 {
	                      width: 91%;
	                      height: 43px;
	                      left: 4.5%;
	                      right: 333px;
	                      position: absolute;
	                      top: 6%;
	                      background: rgba(255,255,255,1);
	                      opacity: 1;
	                      border-top-left-radius: 8px;
	                      border-top-right-radius: 8px;
	                      box-shadow: 0px 1px 11px rgb(0 0 0 / 24%);
	                      overflow: hidden;
						  border-bottom: 1px solid #DDDDDD;
	                  }
	                  .v153_31{
											width: 15%;
											height: 45px;
											background-repeat: no-repeat;
											background-position: center center;
											background-size: cover;
											opacity: 1;
											position: absolute;
											top: 6% !important;
											left: 17.3% !important;
											overflow: hidden;
	                  }
	                  .v153_33 {
	                      top: 78% !important;
	                      width:81% !important;
	                      opacity: 1;
	                      position: absolute;
	                      left: 2px;
	                      border: 2px solid rgba(255,0,151,1);
	                      background: #f40091;
	                  }
	                  .v153_35{
	                      /*width:13px !important;
	                      height:40px !important;*/
	                  }
	                  .v153_32{
	                      font-weight: 600 !important;
	                      font-size:16px !important;
	                      margin-left: -8px !important;
	                      top:0px !important;
	                  }
	                  .v153_11{
	                      top:25% !important;
	                      left:38% !important;
	                  }
	                  .v153_14{

	                  }
	                  .v153_12{
	                      font-size: 15px !important;
	                      left:27px !important;
	                      top:0px !important;
	                  }
										.v153_12_cir{
											 font-size: 15px !important;
											 left:-4px !important;
											 top:0px !important;
									 }
	                  .v153_16{
	                      left:59.2% !important;
	                      top:-1% !important;
	                  }
										.v153_11_cir {

									    position: absolute !important;
									    top: 23% !important;
									    left: 74.2% !important;
									}
	                  .v37_74 {
	                    top:20px !important;
	                    left:41px !important;
	                  }
	                  .v153_30{

	                  }
	                  .v153_22{
	                      top:9px !important;
	                      left:41px !important;
	                  }
	                  .v94_8 {
	                      width: 410px;
	                      height: 20px;
	                      color: rgba(255,255,255,1);
	                      position: absolute;
	                      display: flex;
	                      top: 2.5%;
	                      left: 33.5%;
	                      text-shadow: 0px 1px 4px rgb(0 0 0 / 20%);
	                      font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                      font-weight: 700;
	                      font-size: 24px;
	                      opacity: 1;
	                      text-align: center;
	                      -webkit-font-smoothing: antialiased;
	                  }
	                  .v37_34 {
	                      width: 91%;
	                      height: 144px;
	                      background: url();
	                      background-repeat: no-repeat;
	                      background-position: center center;
	                      background-size: cover;
	                      opacity: 1;
	                      position: absolute;
	                      top: 8.9%;
	                      left: 4.5%;
	                      overflow: hidden;
	                      border-bottom-left-radius: 8px;
	                      border-bottom-right-radius: 8px;

	    									z-index:100;
	                  }
	                  .v128_1118 {
	                      width: 100%;
	                      height: 144px;
	                      background: #fff;
	                      opacity: 1;
	                      position: absolute;
	                      overflow: hidden;
	                  }
	                  .v37_38 {
	                      width: 390px;
	                      height: 43px;
	                      background-repeat: no-repeat;
	                      background-position: center center;
	                      background-size: cover;
	                      opacity: 1;
	                      position: absolute;
	                      top: 14.5%;
	                      left: 2%;
	                      overflow: hidden;
	                      z-index:20;
	    									border-radius:6px;
	    									border: 1.2px solid #DDDDDD;
	                  }
	                  .v37_45 {
	                      width: 100%;
	                      height: 43px;
	                      background: rgba(243,245,247,1);
	                      opacity: 1;
	                      position: relative;
	                      top: 0px;
	                      left: 0px;
	                      border-radius: 2px;
	                      box-shadow: 0px 3px 18px rgb(0 0 0 / 12%);
	                      overflow: hidden;
	                      }
	                  .v37_47 {
	                      width: 263px;
	                      color: rgba(38,38,38,1);
	                      position: absolute;
	                      top: 17%;
	                      left: 38.76px;
	                      font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                      font-weight: Regular;

	                      opacity: 1;
	                      text-align: left;
	                  }
	                  .v37_47 {
	                      width: 263px;
	                      color: rgba(38,38,38,1);
	                      position: absolute;
	                      top: 17%;
	                      left: 38.76px;
	                      font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                      font-weight: Regular;

	                      opacity: 1;
	                      text-align: left;
	                  }
	                  .select_destination_moteur {
	                      width: 106%!important;
	                      border: none !important;
	                      background-color: rgba(243,245,247,1) !important;
	                      font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                      font-size: 15px;
	                      font-weight: 400;
	                      outline: none;
	                      line-height: 16px;
	    									margin-top:1%
	                  }
	                  .select_destination_moteur::placeholder {
	                      color:#262626;
	                  }
	                   .v64_167 {
	                      width: 13px;
	                      height: 20px;
	                      opacity: 1;
	                      position: absolute;
	                      top: 21%;
	                      left: 14px;
	                  }
	                   .v37_67 {
	                      height: 90% !important;
	                      top: 13% !important;
	                      width: 100% !important;
	                      left: -3%!important;

	                      position: absolute !important
	                   }
	                   .v37_72 {
	                      width: 37%;
	                      height: 58px;
	                      background-repeat: no-repeat;
	                      background-position: center center;
	                      background-size: cover;
	                      opacity: 1;
	                      position: absolute;
	                      top: -5%;
	                      left: 42.8%;
	                      overflow: hidden;
	                  }
	                  .v37_73{
	                      height: 43px !important;
	                      width:45%!important;
	                      top:16% !important;
	                  }
	                  .v37_75{
	                      top: 0px !important;
	                      left: 29% !important;
	                  }
	                  .col_dep
	                  {
	                      width:175px !important;
	                      top:-58% !important;
	                      height:43px !important;
	                      left:48.8% !important;
	                  }
	                  .v165_156{
	                      width: 390px;
	                      height: 43px;
	                      background: rgba(243,245,247,1);
	                      opacity: 1;
	                      position: absolute;
	                      margin-top: 5.7%;
	                      left: 5%;
	                      border: 1.2px solid #DDDDDD;
	                      border-radius: 6px;
	                  }
										.champs_dest{
											height: 43px !important;
										}
	                  .v162_15{
	                      top:23% !important;
	    									left:92% !important;
	                  }
	                  .v64_170_ch{
	                      top:-23% !important;
	                  }
	                  .repations_chambres {
											margin-left: 6.2% !important;
										 right: 3% !important;
										 top: -1% !important;
	                  }
	                  .tous_les_chambres {
	                      width: 35% !important;

	                  }
	                  .repartition_une_ch{
	                      float: left;
	                      width: 358px;
	                      height: 249px;
	    									margin-top:0.5%;
	    									border-radius:5px;

	                  }
	                  .nombre_adultes{
	                      margin-right: -5% !important;
	                  }
	                  .nombre_enfants{
	                      margin-right: -5% !important
	                  }
	                  .v87_280{
	                      top:23% !important;
	                  }
	                  .v194_23{
											top: 10% !important;
	    								left: 60% !important;
	                  }
	    							.v194_22:hover{
	    								background-color: #f40091;
	    								background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    								background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    								background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    								background-size: 300px;
	    							}
	                  .v194_22{
											width: 138% !important;
											height: 44px !important;
											margin-top: -69.7% !important;
											margin-left: 395.8% !important;
											overflow: hidden;
											z-index: 100;
	                  }
	                  .v194_23{
	                    width:175px !important;
	                    margin-top:0.8%;
	                  }
	    							.v153_33_v_org {
	    									width: 86%;

	    									opacity: 1;
	    									position: absolute;
	    									top: 68%;
	    									left: 2px;
	    									border: 2px solid #262626;
	    									background: #262626;
	    							}
										.v153_33_cir {
												width: 51%;

												opacity: 1;
												position: absolute;
												top: 71%;
												left: 2px;
												border: 2px solid #262626;
												background: #262626;
										}
	    							.v153_33_vol {
	    									width: 89%;

	    									opacity: 1;
	    									position: absolute;
	    									top: 75%;
	    									left: 6px;
	    									border: 2px solid #262626;
	    									background: #262626;
	    							}
									.border-grey {
											    --tw-border-opacity: 1;
											    border-color: hsl(var(--color-grey)/var(--tw-border-opacity));
											}
											.header_humberger{
												float: left;
    										margin-left: -7%;
												position: absolute;

												margin-top:2%;
												display: block !important;
											}
											.items-center {
											    align-items: center;
											}
											.h-full {
											    height: 50%;
											}
											.flex {
											    display: flex;
											}
											.text-black {
											    --tw-text-opacity: 1;
											    color: hsl(var(--color-black)/var(--tw-text-opacity));
													background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-menu.svg);
													background-repeat: no-repeat;
													border:none;

											}

											.p-15 {
											    padding: 0.9375rem;
											}
											.sr-only {
											    position: absolute;
											    width: 1px;
											    height: 1px;
											    padding: 0;
											    margin: -1px;
											    overflow: hidden;
											    clip: rect(0,0,0,0);
											    white-space: nowrap;
											    border-width: 0;
											}
											.hamburger {
												 position: relative;
												 background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-menu.svg)
											}
											.bg-white {
											    --tw-bg-opacity: 1;
											    background-color: hsl(var(--color-white)/var(--tw-bg-opacity));
											}
											.overflow-y-scroll {
											    overflow-y: scroll;
											}
											.w-full {
												width: 100%;
												-webkit-appearance: button;
												background-color: transparent;
												background-image: none;
												display: block !important;
												position: absolute;
												z-index: 100000;

											}
											.text-blueWave {
											    --tw-text-opacity: 1;
											    color: hsl(var(--color-blue-wave)/var(--tw-text-opacity));
											}
											menu, ol, ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}

											.uppercase {
											    text-transform: uppercase;
											}


	                }
	                 @media only screen and (min-width:1241px) and (max-width:1880px) {




										 /*omra icon style on the menu */

										                                     .v153_14_omra {
										                                       width: 26%;
										                                       height: 80px;
										                                       background: url(https://tn.tunisiebooking.com/images/icone-moteur/omrablack.svg);
										                                       background-repeat: no-repeat;
										                                       opacity: 1;
										                                       position: relative;
										                                       top: 0px;
										                                       left: 0px;
										                                       background-size: 100%;
										                                     }
										                                     .v153_14_omra:focus {
										                                        width: 15%;
										                                        height: 80px;
										                                        background: url(https://tn.tunisiebooking.com/images/icone-moteur/omrapink.svg);
										                                        background-repeat: no-repeat;
										                                        opacity: 1;
										                                        position: relative;
										                                        top: 0px;
										                                        left: 0px;
										                                        background-size: 100%;
										                                        zoom: 206%;
										                                     }

										                                     .v153_11_omra{
										                                      width: 173px;
										                                       height: 45px;
										                                       background-repeat: no-repeat;
										                                       background-position: center center;
										                                       background-size: cover;
										                                       opacity: 1;
										                                       position: absolute;
										                                       top: 33%;
										                                       left: 30.2%;
										                                       overflow: hidden;
										                                       cursor: pointer;
										                                     }
										                                     .v153_13_omra {
										                                       width: 55%;
										                                       height: 40px;
										                                       opacity: 1;
										                                       position: relative;
										                                       top: 1px;
										                                       left: 6px;
										                                       overflow: hidden;
										                                     }
										                                     .v153_13_omra:hover{

										                                       border-bottom: solid;
										                                       border-bottom-width: thick;
										                                     }
										                                     .v153_33_omra{

										                                       display: none;
										                                     }
										                                     .v153_33_omra:hover{
										                                       width: 54%;
										                                       opacity: 1;
										                                       position: absolute;
										                                       top: 90%;
										                                       border: 2px solid #262626;
										                                       background: #262626;
										                                       display: flex;
										                                     }

										                                     .v153_15_omra{

										                                     }
										                                     .v153_12_omra{
										                                      width: 133px;
										                                      color: #262626;
										                                      position: absolute;
										                                      top: 1px;
										                                      left:-4px;
										                                      font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif;
										                                      font-size: 16px;
										                                      opacity: 1;
										                                      text-align: center;
										                                      font-weight: 400;
										                                       }




										 .slick-slider{
											 padding-top:28px !important;
										 }
										 .ic_hotel{
	                     height: auto;
	                   }
										 .lds-ellips {
												top:-8% !important ;
											}
											.span_vorg{
												position: absolute;
												width: 162px;
												height: 12px;
												left: 20px;
												top: 21px;
												font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
												font-style: normal;
												font-weight: 600;
												font-size: 18px;
												line-height: 12px;
												color: #262626;
											}
											.megamenu_vorg{
												height: 338px !important;
											}
	    							 .vertical-line {
	    								 border-left: 1px solid #DDDDDD;
	    								 height: 454px;

	    								 margin-left: 29.4%;
	    								 margin-top: 6.5%;
	    								}
	    								.vertical-line_1{
	    									border-left: 1px solid #DDDDDD;
	    									height: 454px;

	    									margin-left: 63.2%;
	    									margin-top: -55%;

	    								}

										.vertical-line_vorg {
	    								 border-left: 1px solid #DDDDDD;
	    								 height: 234px;

	    								 margin-left: 29.4%;
	    								 margin-top: 6.5%;
	    								}
	    								.vertical-line_1_vorg{
	    									border-left: 1px solid #DDDDDD;
	    									height: 241px;

	    									margin-left: 63.2%;
	    									margin-top: -28%;

	    								}
	    							 .dropdown-toggle::after {
	                        display: none;
	                    }
	                    #navbarCollapse{
	                        display: block !important;
	                        width: 420px;
	                        margin-left: 104px;
	                        position: relative;
	                        margin-top: 5%;
	                        float: left;
	                    }
	                    #nav_span_hotel{
	                      margin-top: -34%;
	                    }
	                    .icon_dropdown_topdest{
	                      margin-top: -21%;
	                      margin-left: 110%;
	                    }
	                    .icon_dropdown_topdest img{
	                      width: 11.19px;
	                      height: 6px;
	                    }
	                    #navbar_menu{
	                        display: block;
	                        width: 806px;
	                        height: 564px;
	                        position: absolute;
													z-index: 2000
	                    }
	                    #row_navhotel{
	                        margin-left: 0%;
	                        margin-top: -1%;
	                    }
	                    #top_destination{
												z-index:1;
		                    position: absolute;
		                    width: 243px;
		                    height: 318px !important;
		                    left: 0px;
		                    top: 2% !important;
		                    border-radius: 6px 0px 0px 6px;
	                    }
	                    #autre_hotels{
	                        width: 228px;
	                        position: absolute;
	                        height: 316px;
	                        left: 36%;

	                    }
	                    #offres_spec{
	                        width: 243px;
	                        height: 316px;
	                        left: 70%;
	                        position: absolute;
	                    }
						#autre_pays{
	                        width: 228px;
	                        position: absolute;
	                        height: 316px;
	                        left: 29%;

	                    }
						#offres_pays{
	                        width: 243px;
	                        position: absolute;
	                        height: 316px;
	                        left: 64%;

	                    }

	                    .list-unstyled li{margin-bottom:13px;}
	                   .ic_hotel{
	                     height: auto;
	                   }
	                   .dropdown-menu{
	                     position: absolute;
	                      width: 729px;
	                      height: 316px;
	                      left: -2px;
	                      top: 15px;
	                      background: #FFFFFF;
	                      box-shadow: 0px 8px 16px rgba(38, 38, 38, 0.24);
	                      border-radius: 6px;
	                      display: block;
	                   }
										 .col-megamenu {
											    margin-top: 24%;
											}

	    							 .nav-item  a{
	    								 font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	    									font-style: normal;
	    									font-weight: 457;
	    									font-size: 15px;
	    									line-height: 18px;
	    									color: #262626;
	    									font-stretch: 100;
	    							 }
	                   .nav-item  a:hover{
	                     color: #262626 !important;
	                     font-stretch: 100;
	                  }
	                  #navbar_menu_vorg{
	                    display: block;
	                    width: 257px;
	                  height: 300px;
	                  position: absolute;
	                  z-index: 1001;
	    							left: 58%;
	                  }
	                  #col_offres_vorg{
											z-index: 1;
	                    position: absolute;
	                    width: 257px;
	                    height: 817px !important;
	                    left: 20px;
	                    top: 14px !important;
	                    border-radius: 6px 0px 0px 6px;
	                  }
									.span_vorg{
											left: 29px !important;
										}
	                  #nav_vorg{
	                    margin-top: -14%;
	                  }
										#nav_span_voy_org{
											margin-top:-11%;
										}
										#nav_vgroupe{
										 margin-top: -8%;
										  margin-left: 134%;
									 }
									 .icon_dropdown_vog{
										 margin-top: -17%;
										 margin-left: 110%;
									 }
									 #nav_span_vgroupe{
										 margin-top:-11%;
									 }
									 .icon_dropdown_vgroupe{
										 margin-top: -17%;
										 margin-left: 110%;
									 }

									 .icon_dropdown_vgroupe img{
										 width: 11.19px;
										 height: 6px;
									 }




										#nav_span_hotel{
											margin-top: -41% !important;
										}
	                  .col_offres_vorg div{
	                    margin-left: 9%;
	                    margin-top: 6%;
	                  }
	                  .icon_dropdown_vog{
	                    margin-top: -17%;
	                    margin-left: 110%;
	                  }

	                  .icon_dropdown_vog img{
	                    width: 11.19px;
	                    height: 6px;
	                  }

					  .icon_dropdown_vol img{
	                    width: 11.19px;
	                    height: 6px;
	                  }
										.icon_dropdown_vplus{
											margin-top: -9%;
	    								margin-left: 28%

										}
										.icon_dropdown_vplus img{
											width: 5.19px;
    								height: 9px;
	                  }
	                  #nav_vol{
	                    margin-top: -7%;
	                  }
	                   .div_form{
	                     position: relative;

	                     height: 204px;
	                     left: -2px;
	                     top: 164px;
	                     background: #FFFFFF;
	                     box-shadow: 0px 1px 11px rgba(0, 0, 0, 0.34);
	                     border-radius: 8px;
	    								 z-index: 100

	                   }
	    							 #ch2, #ch3, #ch4, #ch5 {
	    									 border-left: 1px  solid #E2E7EB;
	    								 }
	    							.checkin{
	    							 margin-left: -5%;
	    							 margin-top: -2%;
	    							}
	    							.checkout{
	    								margin-left: -5%;
	    								margin-top: -2%;
	    							}

	    							.contenu{
	                    width: 103%;
	                    margin-left: -0.5%;
	    								margin-top:2.7%;
	    							}
	    							.box_produit{
	    								width:31%;
	    							}
	    							.sidebar{
	    								width:33%;
	    							}
	    							.sous_body{
	    								/*margin-top:6%;*/
	    								padding-top: 6.2%;
	    								position: relative;
	    							}
	    							.sou_bodym {
	    								 width: 100%;
	    								 height: 300px;
	    								 background-color: #fff;

	    						 }
	    								.menu{
	    										margin-top:-1%;
	    										max-height: 80px;
	    									 background-color: #fff;
	    								}

	    								.logo{
	                      float: left;
	                      margin-left: -0.5%;
	                      margin-top: 2.5%;
	    								}
	    							 .cordonne{
	    								 	position: relative;
	    									width: 19%;
	    									margin-left: 81.5%;
	    									height: 50%;
	    									padding-top: 6%;
	    							 }
	    							 .phone{
	    								 width: 25px;
	    								 float: left;
	    								 background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/phone.svg);
	    								 background-repeat: no-repeat;
	    								 background-position: right;
	    								 min-height: 100%;
	    								 background-size: 25px 35px;
	    								 margin-right: 20px;
	    								 color: #262626;
	    								 position: absolute;
	    								 top: 21%;
	    								 left: 21%;

	    							 }
	    							 .tlf
	    							 {
	    								 font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    								 font-weight: 600;
	    								 font-size: 24px;
	    								 line-height: 8.53px;
	    								 color: #262626;
	    								 position: absolute;
	    								 top: 59.5%;

	    								 height: 30px;
	    								 left: 34%;

	    							 }
	    							 .vl{
	    									 position: absolute;
	    									 top:45.5%;
	    									 border-left:1px solid #262626;
	    									 height: 30px;
	    									 left: 51%;
	    							 }
	    							 .adresse{
	    								 width: 22px;
	    								 height: 36px;
	    								 margin-left: 98.2% !important;
	    								 margin-top: -3%;
	    								 position: relative;
	    								 z-index: 10;
	    								 background-repeat: no-repeat;
	    								 background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg);
	    							 }
	    							 .horaire{
	    								 padding-top: 5.5%;

	    								z-index: 21;
	    								position: absolute;
	    								width: 257px;
	    								height: 88px;
	    								left: -18%;
	    								margin-top: 2%;
	    								background: #FFFFFF;
	    								box-shadow: 0px 8px 16px rgb(38 38 38 / 34%);
	    								border-radius: 6px;
	    								z-index: 1000;
	    							 }
	    							 .horaire p {
											 font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
												font-style: normal;
												font-weight: 400;
												font-size: 14px;
												line-height: 72.69%;
												text-align: center;
												color: #6B6B6B;
	    							}
	    							 .jours{
	    									 font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    									 font-weight:400;
	    									 font-size:15px;
	    									 line-height:18px;
	    									 color:#262626;
	    							 }
	    							 .heures{
	    									 margin-top:-6.5%;
	    									 font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	    									 font-weight:400;
	    									 font-size:15px;
	    									 line-height:18px;
	    									 color:#262626;
	    							 }
	                    .v312_1355 {
	                        width: 100%;
	                        height: auto;
	                        min-height: 1000px;
	                        background: url();
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 54px;
	                        left: 0px;
	                        overflow: hidden;
	                    }

	                    .v2_502 {
	                        width: 100%;
	                        height: 328px;
	                        background: url(https://tn.tunisiebooking.com/images/img_moteur_home2-min.jpg);
	                        opacity: 1;
	                        background-size: cover;
	                        background-repeat: no-repeat;
	                        position: absolute;
	                        top: 1.5%;
	                        left: 0%;
	                    }
	                     .v148_1172 {
	                       position: relative;
	                      /* width: 1285px; */
	                      height: 60px;
	                      left: 0px;
	                      top: 1px;
	                      background: rgba(255,255,255,1);
	                      opacity: 1;
	                      border-bottom: 1px solid #DDDDDD;
	                      border-top-left-radius: 8px;
	                      border-top-right-radius: 8px;
	                      overflow: hidden;
	                    }
	                    .v153_31{
	                        width: 144px;
	                        height: 45px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 27% !important;
	                        left: 10.3% !important;
	                        overflow: hidden;
	                    }
											.v153_11 {
													width: 173px;
													height: 45px;
													background-repeat: no-repeat;
													background-position: center center;
													background-size: cover;
													opacity: 1;
													position: absolute;
													top: 33%;
													left: 46% !important;
													overflow: hidden;
													cursor: pointer;
											}
											.v153_16{
												left: 68% !important;
											}
	                    .v153_33 {
	                      top: 87% !important;
	                      width: 104% !important;
	                      opacity: 1;
	                      position: absolute;
	                      left: 2px;
	                      border: 2px solid rgba(255,0,151,1);
	                      background: #f40091;
	                    }
	                    .v153_32{
	                        font-weight: 600 !important;
	                        font-size:16px !important;
	                        margin-left: 4px !important;
	                        top:0px !important;
	                    }
	                    .v94_8 {
	                      /*width: 614px;*/
	                      color: rgba(255,255,255,1);
	                      position: absolute;
	                      display: flex;
	                      top: 4%;
	                      /*left: 410px;*/
	                      text-shadow: 0px 1px 4px rgb(0 0 0 / 20%);
	                      font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	                      font-weight: 600;
	                      font-size: 38px;
	                      opacity: 1;
	                      text-align: center;
	                      -webkit-font-smoothing: antialiased;
	                      line-height: 59px;
	                    }
	                    .v94_9 {
	                      width: 697px;
	                      height: 40px;
	                      /*left: 414px;*/
	                      top:100px;
	                      color: rgba(255,255,255,1);
	                      position: absolute;
	                      display: flex;

	                      text-shadow: 0px 1px 4px rgb(0 0 0 / 20%);
	                      font-style: normal;
	                       font-weight: 400;
	                       font-size: 17px;
	                       line-height: 20.15px;
	                       /* or 20px */

	                       letter-spacing: 0.02em;
	                      opacity: 1;

	                      -webkit-font-smoothing: antialiased;

	                    }
	                        .v37_34 {
	                          width: 1184px;
	                          height: 141px;
	                          background: url();
	                          background-repeat: no-repeat;
	                          background-position: center center;
	                          background-size: cover;
	                          opacity: 1;
	                          position: relative;
	                          top: 2px;
	                          left: -0.2%;
	                          border-bottom-left-radius: 8px;
	                          border-bottom-right-radius: 8px;
	                          /*box-shadow: 0px 1px 11px rgb(0 0 0 / 24%);*/
	                          overflow: hidden;
	    											z-index:100;
	                        }

	                    .v128_1118 {
	                        width: 100%;
	                        height: 110px;
	                        background: #fff;
	                        opacity: 1;
	                        position: absolute;
	                        overflow: hidden;
	                    }
	                        .v37_38{
	                          width: 420px;
	                          height: 58px;
	                          background-repeat: no-repeat;
	                          background-position: center center;
	                          background-size: cover;
	                          opacity: 1;
	                          position: absolute;
	                          top: 27px;
	                          left: 19px;
	                          overflow: hidden;
	                          border: 1.2px solid #DDDDDD;
	                          cursor: pointer;
	                          border-radius: 6px;
	                        }
	                        .v37_45{
	                            width: 100%;
	                            height: 55px;
	                            background: rgba(243,245,247,1);
	                            opacity: 1;
	                            position: relative;
	                            top: 0px;
	                            left: 0px;
	                            /*border: 1.2px solid #DDDDDD;*/
	                            border-radius: 2px;
	                            box-shadow: 0px 3px 18px rgb(0 0 0 / 12%);
	                            overflow: hidden;
	                        }
	                        .v37_47 {
	                            width: 263px;
	                            color: rgba(38,38,38,1);
	                            position: absolute;
	                            top: 16px;
	                            left: 38.76px;
	                            font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                            font-weight: Regular;
	                            /* font-size: 15px; */
	                            opacity: 1;
	                            text-align: left;
	                        }
	                        .select_destination_moteur {
	                            width: 100%!important;
	                            border: none !important;
	                            background-color: rgba(243,245,247,1) !important;
	                            font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                            font-size: 15px;
	                            font-weight:400;
	                            outline: none;
	    												margin-top: -1%;
	    												margin-left:-4%;
	                        }
	                        .select_destination_moteur::placeholder {
	                            color:#262626;
	                        }
	                        .v64_167 {
	                            width: 13px;
	                            height: 20px;
	                            opacity: 1;
	                            position: absolute;
	                            top: 13px;
	                            left: 10px;
	                        }
	                        .v37_67 {
	                          width: 65%;
	                          height: 58px;
	                          background-repeat: no-repeat;
	                          background-position: center center;
	                          background-size: cover;
	                          opacity: 1;
	                          position: absolute;
	                          top: 27px;
	                          left: 33.7%;
	                          overflow: hidden;
	                        }
	                          .v37_72{
	                            width: 65.2%;
	                            height: 58px;
	                            background-repeat: no-repeat;
	                            background-position: center center;
	                            background-size: cover;
	                            opacity: 1;
	                            position: relative;
	                            top: 0px;
	                            left: 6.8%;
	                            overflow: hidden;
	                          }
	                        .v37_73 {
	                            width: 188px !important;
	                            height: 58px !important;
	                            background: rgba(243,245,247,1);
	                            opacity: 1;
	                            position: relative;
	                            top: 0px;
	                            left: 0px;
	                            border: 1.2px solid #DDDDDD;
	                            border-radius: 2px;
	                            overflow: hidden;
	                        }
	                        .v15_640{
	                            margin-top:7% !important;
	                            margin-left:14px!important;
	                        }
	                        .v165_156{
	                            width: 310px;
	                            height: 58px;
	                            background: rgba(243,245,247,1);
	                            opacity: 1;
	                            position: relative;
	                            top: -100%;
	                            left: 59.2%;
	                            border: 1.2px solid #DDDDDD;
	                            border-radius: 6px;
	                            overflow: hidden;
	                        }
													.champs_dest{
														height: 58px !important;
													}
	    										.tous_les_chambres{
	    											width:41% !important;
														margin-left: 0%;
	    										}
	                        .repations_chambres {
	                            right:-46% !important;
	                            margin-top:-23.5%;
	                        }
	                        .repartition_une_ch{
	                            /* padding: 10px 0; */
	                            float: left;
	                            /* background-color: #fff; */
	                            width: 386px;
	                            height: 249px;
	                            /*margin-top:0.5%;*/
	    												/*border-radius:5px;*/
	                        }
	                        .v194_22{
	                          width: 490px !important;
	                          margin-top: 11.1% !important;
	                          margin-left: -325.5% !important;
	                        }

	              .v194_21 {
	                left:110% !important;
	                top:1% !important;
	                width:20%!important;
	              }
	              .v194_23{
	                margin-top: 52%;
	                width: 20% !important;
	                left: 210% !important;
	    						z-index: 100;
	              }
	    					.v153_33_v_org {
	    							width: 92%;
	    							/*height: 2px;*/
	    							opacity: 1;
	    							position: absolute;
	    							top: 90%;
	    							left: 2px;
	    							border: 2px solid #262626;
	    							background: #262626;
	    					}
								.v153_33_cir {
	    							width: 52%;
	    							/*height: 2px;*/
	    							opacity: 1;
	    							position: absolute;
	    							top: 90%;
	    							left: 2px;
	    							border: 2px solid #262626;
	    							background: #262626;
	    					}
	    					.v153_33_vol {
	    							width: 100%;
	    							/*height: 2px;*/
	    							opacity: 1;
	    							position: absolute;
	    							top: 90%;
	    							left: 9px;
	    							border: 2px solid #262626;
	    							background: #262626;
	    					}
								.icon_dropdown_vol {
							    margin-top: -71%;
							    margin-left: 135%;
							    float: left;
							}



	                 }


	                 @media only screen  and (min-width : 1881px) {



/*omra icon style on the menu */

                                    .v153_14_omra {
                                      width: 26%;
                                      height: 80px;
                                      background: url(https://tn.tunisiebooking.com/images/icone-moteur/omrablack.svg);
                                      background-repeat: no-repeat;
                                      opacity: 1;
                                      position: relative;
                                      top: 0px;
                                      left: 0px;
                                      background-size: 100%;
                                    }
                                    .v153_14_omra:focus {
                                       width: 15%;
                                       height: 80px;
                                       background: url(https://tn.tunisiebooking.com/images/icone-moteur/omrapink.svg);
                                       background-repeat: no-repeat;
                                       opacity: 1;
                                       position: relative;
                                       top: 0px;
                                       left: 0px;
                                       background-size: 100%;
                                       zoom: 206%;
                                    }

                                    .v153_11_omra{
                                     width: 173px;
                                      height: 45px;
                                      background-repeat: no-repeat;
                                      background-position: center center;
                                      background-size: cover;
                                      opacity: 1;
                                      position: absolute;
                                      top: 33%;
                                      left: 26.2%;
                                      overflow: hidden;
                                      cursor: pointer;
                                    }
                                    .v153_13_omra {
                                      width: 55%;
                                      height: 40px;
                                      opacity: 1;
                                      position: relative;
                                      top: 1px;
                                      left: 19px;
                                      overflow: hidden;
                                    }
                                    .v153_13_omra:hover{

                                      border-bottom: solid;
                                      border-bottom-width: thick;
                                    }
                                    .v153_33_omra{

                                      display: none;
                                    }
                                    .v153_33_omra:hover{
                                      width: 54%;
                                      opacity: 1;
                                      position: absolute;
                                      top: 90%;
                                      border: 2px solid #262626;
                                      background: #262626;
                                      display: flex;
                                    }

                                    .v153_15_omra{

                                    }
                                    .v153_12_omra{
                                     width: 133px;
                                     color: #262626;
                                     position: absolute;
                                     top: 1px;
                                     left:-4px;
                                     font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif;
                                     font-size: 16px;
                                     opacity: 1;
                                     text-align: center;
                                     font-weight: 400;
                                      }




										 .etiquette{
											 top:0px !important;
										 }
										 #nav_span_voy_org,#nav_span_hotel{
											 font-style: normal;
											 font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;
												font-weight: 457;
												font-size: 15px;
												line-height: 18px;
												-webkit-font-smoothing: antialiased;
										 }
										 .slick-slide {
									     margin-left:16px !important;
									   }

										 #autre_pays{
	                        width: 228px;
	                        position: absolute;
	                        height: 316px;
	                        left: 29%;
	                        /*border-right: 1px solid #DDDDDD;*/
	                    }
											#offres_pays{
	                        width: 243px;
	                        position: absolute;
	                        height: 316px;
	                        left: 64%;

	                    }
											.span_vorg{
												position: absolute;
												width: 162px;
												height: 12px;
												left: 20px;
												top: 21px;
												font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
												font-style: normal;
												font-weight: 600;
												font-size: 18px;
												line-height: 12px;
												color: #262626;
												padding-left:2%;
											}
											.megamenu_vorg{
												height: 338px !important;
											}
										 .col-megamenu{
											 margin-top:24%;
										 }
										 #col_vorg{
											 margin-top:20%!important;
										 }
	    							 .vertical-line {
	    								 border-left: 1px solid #DDDDDD;
	    								 height: 458px;

	    								 margin-left: 29.4%;
	    								 margin-top: 6.5%;
	    						    }
	    								.vertical-line_1{
											border-left: 1px solid #DDDDDD;
											height: 448px;

											margin-left: 63.2%;
											margin-top: -55%;

	    								}

										.vertical-line_vorg {
	    								 border-left: 1px solid #DDDDDD;
	    								 height: 234px;

	    								 margin-left: 29.4%;
	    								 margin-top: 6.5%;
	    						    }
	    								.vertical-line_1_vorg{
											border-left: 1px solid #DDDDDD;
											height: 234px;

											margin-left: 63.2%;
											margin-top: -28%;
										}

	                   .dropdown-toggle::after {
	                        display: none;
	                    }
	                    #navbarCollapse{
	                        display: block !important;
	                        width: 420px;
	                        margin-left: 278px;
	                        position: relative;
	                        margin-top: 3.5%;
	                        float: left;
	                    }
	                    #nav_span_hotel{
	                      margin-top: -29%;
	                    }
											#nav_span_voy_org{
	                      margin-top: 6%;
	                    }
	                    .icon_dropdown_topdest{
	                      margin-top: -20%;
	                      margin-left: 110%;
	                    }
	                    .icon_dropdown_topdest img{
	                      width: 11.19px;
	                      height: 6px;
	                    }
	                    #navbar_menu{
	                        display: block;
	                        width: 806px;
	                        height: 569px;
	                        position: absolute;
													z-index: 2000;

	                    }
	                    #row_navhotel{
	                        margin-left: 0%;
	                        margin-top: -1%;
	                    }
	                    #top_destination{
												z-index: 1;
	                      position: absolute;
	                      width: 243px;
	                      height: 318px !important;
	                      left: 0px;
	                      top: 2% !important;
	                      border-radius: 6px 0px 0px 6px;
	                    }

	                    #autre_hotels{
	                        width: 228px;
	                        position: absolute;
	                        height: 316px;
	                        left: 36%;

	                    }
	                    #offres_spec{
	                        width: 243px;
	                        height: 316px;
	                        left: 70%;
	                        position: absolute;
	                    }

	                    .list-unstyled li{margin-bottom:13px;}
	                   .ic_hotel{
	                     height: auto;
	                   }
	                   .dropdown-menu{
	                     position: absolute;
	                      width: 729px;
	                      height: 316px;
	                      left: -2px;
	                      top: 22px;
	                      background: #FFFFFF;
	                      box-shadow: 0px 8px 16px rgba(38, 38, 38, 0.24);
	                      border-radius: 6px;
	                      display: block;
	                   }

	    							 .nav-item  a{
	    								 font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	    									font-style: normal;
	    									font-weight: 457;
	    									font-size: 15px;
	    									line-height: 18px;
	    									color: #262626;
	    									font-stretch: 100;
	    							 }
	                   .nav-item  a:hover{
	                     color: #262626 !important;
	                     font-stretch: 100;
	                  }
	                  #navbar_menu_vorg{
	                    display: block;
	                    width: 257px;
	                  height: 300px;
	                  position: absolute;
	                  z-index: 1001;
	    							left: 58%;
	                  }
	                  #col_offres_vorg{
											z-index: 1;
	                    position: absolute;
	                    width: 257px;
	                    height: 817px !important;
	                    left: 20px;
	                    top: 14px !important;
	                    border-radius: 6px 0px 0px 6px;
	                  }
	                  #nav_vorg{
	                    margin-top: -14%;
	                  }
										#nav_vgroupe{
										 margin-top: -5%;
										 margin-left: 134%;
									 }
									 #nav_span_vgroupe{
										 margin-top:-11%;
									 }
	                  .col_offres_vorg div{
	                    margin-left: 9%;
	                    margin-top: 6%;
	                  }
	                  .icon_dropdown_vog{
	                    margin-top: -17%;
	                    margin-left: 110%;
	                  }

	                  .icon_dropdown_vog img{
	                    width: 11.19px;
	                    height: 6px;
	                  }
										.icon_dropdown_vplus{
											margin-top: -9%;
	    								margin-left: 28%
										}
										.icon_dropdown_vplus img{
											width: 5.19px;
    								height: 9px;
	                  }

										.icon_dropdown_vol{
											margin-top: -84%;
											margin-left: 135%;
											float: left;
	                  }

	                  .icon_dropdown_vol img{
	                    width: 11.19px;
	                    height: 6px;
	                  }
	                  #nav_vol{
	                    margin-top: -7%;
	                  }
	                   .div_form{
	                     position: relative;

	                     height: 204px;
	                     left: -2px;
	                     top: 164px;
	                     background: #FFFFFF;
	                     box-shadow: 0px 1px 11px rgba(0, 0, 0, 0.34);
	                     border-radius: 8px;
	    								 z-index: 100;
	                   }
	    							 #ch2, #ch3, #ch4 {
	    									 border-left: 1px  solid #E2E7EB;
	    								 }
	    							 .v64_170_ch{
	    								 top:-4% !important;
	    							 }
	    							 .v87_280{
	    								 top:33% !important;
	    							 }
	    							 .v162_15{
	    								 top:33% !important;
	    							 }
	    							 .checkin{
	    								margin-left: -5%;
	    								margin-top: -2%;
	    							 }
	    							 .checkout{
	    								 margin-left: -5%;
	    								 margin-top: -2%;
	    							 }

	    							 .contenu{
	                     width: 104%;
	                     margin-left: -1%;
	    								 margin-top: 2.7%;
	    							 }
	    							 .box_produit{
	    								 width:31%;
	    							 }
	    							 .sidebar{
	    								 width:33%;
	    							 }
	    							 .sous_body{

	    								padding-top: 2%;
	        				 		position: relative;
	    							 }
	    							 .sou_bodym {
	    							    width: 100%;
	    							    height: 70px;
	    									background-color: #fff;
												margin-bottom: 14%;
    										box-shadow: inset 0 -5px 5px -5px rgba(0,0,0,0.5);

	    							}
	                    .menu{

	                        max-height: 65px;
	                    }
	                    .logo{
	                      z-index: 3;
	                      float: left;
	                      margin-left: -19%;
	                      margin-top: 1.2%;
	                      position: relative;
	                    }
	    								.logo img{
	    									padding-top:2%;
	                      z-index: 3;
	    									float: left;
	    									margin-left: 86%;
	    									margin-top: -0.8%;
	    									position: relative;
	    								}
	                    .cordonne{
	                      position: relative;
	                      width: 43%;
	                      margin-left: 77.5%;
	                      height: 50%;
	                      padding-top: 1%;
	                    }
	                    .phone{
	                       z-index: 1;
	                       width: 23.36px;
	                       height: 29px;
	                       float: left;
	                       background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/phone.svg);
	                       background-repeat: no-repeat;
	                       background-position: right;
	                       min-height: 100%;
	                       background-size: 25px 35px;
	                       margin-right: 20px;
	                       color: #262626;
	                       position: absolute;
	                       top: 31%;
	                       left: 19.5%;
	                       margin-top: 3.5%;

	                    }
	                    .tlf
	                    {
	                      font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                      font-weight: 600;
	                      font-size: 24px;
	                      line-height: 8.53px;
	                      color: #262626;
	                      position: absolute;
	                      margin-top: 3.5%;

	                      height: 30px;
	                      left: 25%;
	                      width: 25%;
	                      -webkit-font-smoothing: antialiased;

	                    }
	                    .vl{
	    										position: absolute;
	                        margin-top:1%;
	                        border-left:1px solid #262626;
	                        height: 30px;
	                        left: 51%;
	                    }
	                    .adresse{
												width: 202px;
												width: 202px;
										    height: 36px;
										    padding-left: -3%;
										    margin-left: 98.8%;
										    margin-top: -3%;
										    position: relative;
										    z-index: 10;

	    										background-repeat: no-repeat;
	    										background-image: url(https://tn.tunisiebooking.com/images/icons-menu-moteur/ic-inform.svg);

	                    }
	    								.horaire{
	                      padding-top: 2.5%;
	                      /* padding-bottom: 0.6%; */
	                      z-index: 21;
	                      position: absolute;
	                      width: 257px;
	                      height: 88px;
	                      left: 2%;
	                      margin-top: 10%;
	                      background: #FFFFFF;
	                      box-shadow: 0px 8px 16px rgb(38 38 38 / 34%);
	                      border-radius: 6px;
	    									z-index: 1000;
	    								}
	    								.horaire p{
												font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
										    font-style: normal;
										    font-weight: 400;
										    font-size: 14px;
										    line-height: 72.69%;
										    text-align: center;
										    color: #6B6B6B;
	    								}
	                    .v312_1355 {
	                        width: 100%;
	                        height: auto;
	                        min-height: 1000px;
	                        background: url();
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 54px;
	                        left: 0px;
	                        overflow: hidden;

	                    }
	                    .v2_502 {
	                        width: 100%;
	                        height: 328px;
	                        background: url(https://tn.tunisiebooking.com/images/img_moteur_home2-min.jpg);
	                        opacity: 1;
	                        background-size: cover;
	                        background-repeat: no-repeat;
	                        position: absolute;
	                        top: 1.5%;
	                        left: 0%;
	    										z-index:100;
	                    }
	                    .v148_1172 {
	                      position: relative;

	                      height: 60px;
	                      left: 0px;
	                      top: 1px;
	                      background: rgba(255,255,255,1);
	                      opacity: 1;
	                      border-bottom: 1px solid #DDDDDD;
	                      border-top-left-radius: 8px;
	                      border-top-right-radius: 8px;
	                      overflow: hidden;

	                    }
	                    .v153_31 {
	                        width: 138px;
	                        height: 49px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 12px;
	                        left: 7%;
	                        overflow: hidden;
	                    }
	                    .v153_33 {
	                        width: 100%;

	                        opacity: 1;
	                        position: absolute;
	                        top: 88%;
	                        left: 2px;
	                        border: 2px solid rgba(255,0,151,1);
	                        background: #f40091;
	                    }
	    								.v153_33_v_org {
	    										width: 94%;

	    										opacity: 1;
	    										position: absolute;
	    										top: 89%;
	    										left: 2px;
	    										border: 2px solid #262626;
	    										background: #262626;
	    								}
											.v153_33_cir {
													width: 51%;

													opacity: 1;
													position: absolute;
													top: 90%;
													left: 2px;
													border: 2px solid #262626;
													background: #262626;
											}
	    								.v153_33_vol {
	    										width: 102%;

	    										opacity: 1;
	    										position: absolute;
	    										top: 91%;
	    										left: 9px;
	    										border: 2px solid #262626;
	    										background: #262626;
	    								}
	                    .v94_8 {

	    							    color: rgba(255,255,255,1);
	    							    position: absolute;
	    							    display: flex;
	    							    top: 4%;

	    							    text-shadow: 0px 1px 4px rgb(0 0 0 / 20%);
	    							    font-family: -apple-system, Roboto,Segoe UI,Helvetica,Arial,sans-serif;
	    							    font-weight: 600;
	    							    font-size: 38px;
	    							    opacity: 1;
	    							    text-align: center;
	    							    -webkit-font-smoothing: antialiased;
	    							    line-height: 59px;
	    									z-index:100;
	                    }
	    								.v94_9 {
	    									width: 697px;
	    									height: 40px;

	    									top:100px;
	    							    color: rgba(255,255,255,1);
	    							    position: absolute;
	    							    display: flex;
	    							    text-shadow: 0px 1px 4px rgb(0 0 0 / 20%);
	    									font-style: normal;
	    									font-weight: 400;
	    									font-size: 17px;
	    									line-height: 20.15px;

	    									 letter-spacing: 0.02em;
	    							    opacity: 1;
	    							    -webkit-font-smoothing: antialiased;
	    									z-index: 100;
	                    }
	                    .v37_34 {
	                      width: 1184px;
	                      height: 141px;
	                      background: url();
	                      background-repeat: no-repeat;
	                      background-position: center center;
	                      background-size: cover;
	                      opacity: 1;
	                      position: relative;
	                      top: 2px;
	                      left: -0.2%;
	                      border-bottom-left-radius: 8px;
	                      border-bottom-right-radius: 8px;

	                      overflow: hidden;
	    									z-index:100;
	                    }
	                    .v128_1118 {
	                        width: 100%;
	                        height: 142px;
	                        background: #fff;
	                        opacity: 1;
	                        position: absolute;

	                        overflow: hidden;
	                    }
	                    .v37_38{
	                        width: 420px;
	                        height: 58px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 27px;
	                        left: 19px;
	                        overflow: hidden;
	    										border: 1.2px solid #DDDDDD;
	    										cursor:pointer;
	                        border-radius: 6px;
	                    }
	                    .v37_45{
	                        width: 100%;
	                        height: 58px;
	                        background: rgba(243,245,247,1);
	                        opacity: 1;
	                        position: relative;
	                        top: 0px;
	                        left: 0px;

	                        border-radius: 2px;
	                        box-shadow: 0px 3px 18px rgb(0 0 0 / 12%);
	                        overflow: hidden;
	                    }
	                    .v37_47 {
	                        width: 263px;
	                        color: rgba(38,38,38,1);
	                        position: absolute;
	                        top: 16px;
	                        left: 33.76px;
	                        font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                        font-weight: Regular;

	                        opacity: 1;
	                        text-align: left;
	                    }
	                    .select_destination_moteur {
	                        width: 110%!important;
	                        border: none !important;
	                        background-color: rgba(243,245,247,1) !important;
	                        font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                        font-size: 16px;
	                        font-weight:500;
	                        outline: none;
	    										margin-top:-1%
	                    }
	                    .select_destination_moteur::placeholder {
	                        color:#262626;
	                    }
	                    .v64_167 {
	                        width: 13.56px;
	                        height: 20px;
	                        opacity: 1;
	                        position: absolute;
	                        top: 13px;
	                        left: 14px;
	                    }
	                    .v37_67 {
	                        width: 65%;
	                        height: 58px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: absolute;
	                        top: 27px;
	                        left: 33.7%;
	                        overflow: hidden;
	                    }
	                      .v37_72{
	                        width: 65%;
	                        height: 58px;
	                        background-repeat: no-repeat;
	                        background-position: center center;
	                        background-size: cover;
	                        opacity: 1;
	                        position: relative;
	                        top: 0px;
	                        left: 7%;
	                        overflow: hidden;
	                    }
	                    .v37_73 {
	    									cursor: pointer;
	                        width: 188px !important;
	                        height: 58px !important;
	                        background: rgba(243,245,247,1);
	                        opacity: 1;
	                        position: relative;
	                        top: 0px;
	                        left: 0px;
	                        border: 1.2px solid #DDDDDD;
	                        border-radius: 6px;
	                        overflow: hidden;
	                    }

	                    .v15_640{
	                        margin-top:11% !important;
	                        margin-left:7%!important;
	                    }
	    								.v37_75{
	    									margin-left:-1%;
	    								}
	                    .v165_156{
	                        width: 310px;
	                        height: 58px;
	                        background: rgba(243,245,247,1);
	                        opacity: 1;
	                        position: relative;
	                        top: -100%;
	                        left: 58.8%;
	                        border: 1.2px solid #DDDDDD;
	                        border-radius: 6px;
	                        overflow: hidden;
	                      }
												.champs_dest{
													height: 58px !important;
												}
	                    .repations_chambres {
	                      right: -46% !important;
	                      margin-top: -23.5% !important;
	                    }
	                    .tous_les_chambres{
	                      margin-left: 0%;
												width:41% !important;
	                    }
	                    .repartition_une_ch{

	                        float: left;

	                        width: 386px;
	                        height: 249px;

	    										border-radius:5px;
	                    }
	                    .v194_22{
	                      width: 490px !important;
	                      margin-top: 23% !important;
	                      margin-left: -168.1% !important;
	                      z-index:1000;
	                    }

	                    .v194_23{
	                      margin-top: 52%;
	                      width: 20% !important;
	                      left: 179.5% !important;
	                    }
	                 }
	                 .v153_34 {
	                    width: 100%;
	                    height: 80px;

	                    opacity: 1;
	                    position: absolute;
	                    top: 14%;
	                    left: 1px;
	                    overflow: hidden;
	                }
	                .v153_35 {
	                    width: 22px;
	                    height: 22px;

	    								background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic_hotel_tunisie.svg);
	                    background-repeat: no-repeat;
	                    opacity: 1;
	                    position: relative;
	                    top: 0px;
	                    left: 0px;
	                    background-size: 100%;
	                    zoom: 105%;
	                }



	                .v153_32 {
	                    width: 84%;
	                    color: #FF0097;

	                    position: absolute;
	                    top: 1px;
	                    left: 24px;
	                    font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif ;
	                    font-weight: 700;
	                    font-size: 16px;
	                    opacity: 1;
	                    text-align: center;
											-webkit-font-smoothing:antialiased;
	                }
	                .v153_11 {
	                    width: 173px;
	                    height: 45px;
	                    background-repeat: no-repeat;
	                    background-position: center center;
	                    background-size: cover;
	                    opacity: 1;
	                    position: absolute;
	                    top: 33%;
	                    left: 44%;
	                    overflow: hidden;
											cursor: pointer;
	                }
									.v153_11_cir {
											width: 173px;
											height: 45px;
											background-repeat: no-repeat;
											background-position: center center;
											background-size: cover;
											opacity: 1;
											position: absolute;
											top: 33%;
											left: 84.2%;
											overflow: hidden;
											cursor: pointer;
									}
	                .v153_13 {
	                    width: 100%;
	                    height: 40px;
	                    opacity: 1;
	                    position: relative;
	                    top: 0px;
	                    left: 0px;
	                    overflow: hidden;
	                }
									.v153_13_cir {
											width: 100%;
											height: 40px;
											opacity: 1;
											position: relative;
											top: 0px;
											left: 0px;
											overflow: hidden;
									}
	                .v153_14 {
	                    width: 18%;
	                    height: 80px;
	                    background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-voyageorg1.svg);
	                    background-repeat: no-repeat;
	                    opacity: 1;
	                    position: relative;
	                    top: 0px;
	                    left: 0px;
	                    background-size: 100%;
	                    zoom: 206%;
	                }

								 .v153_14_cir {
										width: 15%;
										height: 80px;
										background: url(https://tn.tunisiebooking.com/images/icone-moteur/circuit-gris.svg);
										background-repeat: no-repeat;
										opacity: 1;
										position: relative;
										top: 0px;
										left: 0px;
										background-size: 100%;
										zoom: 206%;
								}


	                .v153_12 {
	                    width: 133px;
	                    color: #262626;
	                    position: absolute;
	                    top: 1px;
	                    left: 35px;
	                    font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif;
	                    font-size: 16px;
	                    opacity: 1;
	                    text-align: center;
	                    font-weight: 400;
	                }
									.v153_12_cir {
										 width: 133px;
										 color: #262626;
										 position: absolute;
										 top: 1px;
										 left:-4px;
										 font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif;
										 font-size: 16px;
										 opacity: 1;
										 text-align: center;
										 font-weight: 400;
								 }
	                .v153_16 {
	                  width: 85px;
	                  height: 51px;
	                    background-repeat: no-repeat;
	                    background-position: center center;
	                    background-size: cover;
	                    opacity: 1;
	                    position: absolute;
	                    top: 15%;
	                    left: 67.5%;
	                    overflow: hidden;
											cursor: pointer;
	                }
	                .v153_23 {
	                    width: 100%;
	                    height: 32px;
	                    background: rgba(255,255,255,1);
	                    opacity: 1;
	                    position: absolute;
	                    top: 1px;
	                    left: 5px;
	                    overflow: hidden;
	                }
	                .v153_28 {
	                    width: 100%;
	                    height: 80px;
	                    background-repeat: no-repeat;
	                    background-position: center center;
	                    background-size: cover;
	                    opacity: 1;
	                    position: absolute;
	                    top: 1px;
	                    left: 1px;
	                    overflow: hidden;
	                }
	                .v153_29 {
	                    width: 100%;
	                    height: 32px;
	                    opacity: 1;
	                    position: absolute;
	                    top: 1px;
	                    left: 0px;
	                }
	                .v153_30 {
	                  width: 32px;
	                  height: 62px;
	                  background: url(https://tn.tunisiebooking.com/images/icone-moteur/ic-vol.svg);
	                  background-repeat: no-repeat;
	                  opacity: 1;
	                  position: relative;
	                  top: -1px;
	                  left: -5px;
	                  background-size: 100%;
	                  zoom: 151%;
	                }
	                .v153_22 {
	                    width: 35px;
	                    color: #262626;
	                    position: absolute;
	                    top: 11px;
	                    left: 42px;
	                    font-family:-apple-system,'Roboto',Helvetica, Arial, sans-serif;
	                    font-weight: 400;
	                    font-size: 16px;
	                    opacity: 1;
	                    text-align: center;
	                }
	                 #carre {
	                    height: 22px;
	                    width: 22px;
	                    background: #fff;
	                    -ms-transform: rotate(45deg); /* Internet Explorer */
	                    -moz-transform: rotate(45deg); /* Firefox */
	                    -webkit-transform: rotate(45deg); /* Safari et Chrome */
	                    -o-transform: rotate(45deg); /* Opera */
	                    margin-top:0.9%;
	                    margin-left:8.29%;
	                    border-radius: 1px;
	                }
	                .list-group{
	                    width:17.2%;
	                }
	                .list_dest {
	                    width: 101%;
	                    margin-left: -0.9%;
	                    margin-top: -0.5%;
	                    margin-bottom: 0.2%;
	                    box-shadow: rgb(0 0 0 / 4%) 0px 0px 14px;
	    								border-radius: 5px;
	                }
	                .v15_640 {
	                    width: 11px;
	                    height: 16px;
	                    margin-top: 6%;
	                    margin-left:14px;
	                }
	                 .v37_74 {
	                    width: 104px;
	                    color: rgba(0,0,0,1);
	                    position: absolute;
	                    top: 28px;
	                    left: 47px;
	                    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                    font-weight: Medium;
	                    font-size: 15px;
	                    opacity: 1;
	                    text-align: left;
	                }
	                .v37_75 {
	                    width: 44px;
	                    color: rgba(107,107,107,1);
	                    position: absolute;
	                    top: 6px;
	                    left: 48px;
	                    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                    font-weight: 400;
	                    font-size: 14px;
	                    opacity: 1;
	                    text-align: left;
	                }
	                .col_dep{
	    							cursor:pointer;
	                    width: 188px;
	                    height: 58px;
	                    background: rgba(243,245,247,1);
	                    opacity: 1;
	                    position: relative;
	                    top: -100%;
	                    left: 40% ;
	                    border-radius: 6px;
	                    overflow: hidden;
	                    border:1.2px solid #DDDDDD;
	                }
	                .v162_15 {
	                    width: 16px;
	                    height: 29px;
	                    opacity: 1;
	                    position: absolute;
	                    top: 16px;
	                    left: 90%;
	                    overflow: hidden;
	                }

	                .v64_170_ch {
	                    width: 301px;
	                    color: rgba(0,0,0,1);
	                    position: absolute;
	                    top: -5px;
	                    left: 34px;
	                    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;

	                    font-size: 15px;
	                    opacity: 1;
	                    text-align: left;
	                }
	                .virgule {
	                    float: left;
	                    margin-right: 3px;
	                }
	                .repations_chambres {

	                    margin-left:19.2%;
	                    position: relative;
	                    z-index: 10001;
	                    top: 275px;
	                    right: 517px;
	                    border-radius: 8px;
	                    box-shadow: rgb(0 0 0 / 4%) 0px 10px 20px, rgb(0 0 0 / 4%) 0px 2px 10px, rgb(0 0 0 / 2%) 0px 0px 4px;
	                    display: none;
	                }
	                .trianglebulle {
	                    width: 100%;
	                    float: left;

	                }
	                .tous_les_chambres {
										position:relative;
	                    float: left;
	                    width: 101%;

	                    background-color: #fff;
	                    background: rgb(255, 255, 255);
	                    border-radius: 5px;
	                    box-shadow: rgb(0 0 0 / 4%) 0px 10px 20px, rgb(0 0 0 / 4%) 0px 2px 10px, rgb(0 0 0 / 2%) 0px 0px 4px;
	                }
	                .une_chambre {
	                    float: left;
	                    width: 100%;
	                    height: 238px;

	                }
	                .num_chambre {
	                    color:#262626;
	                    float: left;
	                    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                    font-size: 18px;
	                    font-weight: 600;
	                    background-color: #FFFFFF;
	                    width: 100%;
	                    height: 40px;
	                    line-height: 16px;
	                    padding-left: 23px;
	                    padding-top: 4%;
	                    border-bottom: 1px solid #E2E7EB;
	                }
	    						.fermer_ch{
										margin-right:3%;
										float:right;
										height:24px;
										width:24px;
										cursor:pointer;
										background:url("https://tn.tunisiebooking.com/theme/images/ic_delete_rose.svg") no-repeat;
									margin-top:-8.5%;
									}

	                .fermer_ch1{margin-right:5%;float:right;height:20px;width:20px;cursor:pointer;background:url("https://tn.tunisiebooking.com/theme/images/ic-fermer-ch.svg") no-repeat;margin-top:-25px}
	                .groupe_adultes {
	                    float: left;
	                    width: 100%;
	                    margin-top: 8px;
	                    height: 60px;
	                }
	                .label_ad {
	                    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                    color:#262626;
	                    float: left;
	                    margin: 8px 5px 0 23px;
	                    font-size: 15px;
	                    font-weight: 400;
	                    line-height: 20px;
	                }
	                .nombre_adultes {
	                    float: right;
	                    width: 50%;
	                    margin-top:1%;
	                    margin-right: -9%;
	                }
	                .moins {
	                    float: left;
	                    cursor: pointer;
	                    background-color: #e9ebee;
	                    width: 38px;
	                    height: 38px;
	                    padding: 4px 6px 16px 6px;
	                    text-align: center;
	                    font-size: 20px;
	                    border-left: none;
	                    background: url(https://tn.tunisiebooking.com/images/-gris.fonce.svg) no-repeat;
	                    background-position: center;
	                    background-size: contain;
	                }
	                .input_ad {
	                    float: left;
	                    width: 30%;
	                    height: 30%;
	                    text-align: center;
	                    padding: 10px 6px 11px 6px;
	                    color: #262626;
	                    font-weight: 500;
	                    font-size: 18px;
	                    line-height: 20px;
	                }
	                .plus {
	                    float: left;
	                    cursor: pointer;
	                    background-color: #e9ebee;
	                    width: 38px;
	                    height: 38px;
	                    padding: 4px 6px 16px 6px;
	                    text-align: center;
	                    font-size: 20px;
	                    border-left: none;
	                    background: url(https://tn.tunisiebooking.com/images/+noir.svg) no-repeat;
	                    background-position: center;
	                    background-size: contain;
	                }
	                .groupe_enfants {
	                    float: left;
	                    width: 100%;
	                    margin-top: 8px;
	                    height: 60px;
	                }
	                .label_en {
	                    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                    float: left;
	                    font-size: 15px;
	                    margin: 8px 0px 0 23px;
	                    font-weight: 400;
	                    line-height: 20px;
	                    color: #222222;

	                }
	                .nombre_enfants {
	                    float: right;
	                    width: 50%;
	                    margin-right:-9%;
	                }
	                .input_en {
	                    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                    font-weight: 500;
	                    float: left;
	                    width: 30%;
	                    height: 30%;
	                    text-align: center;
	                    padding: 10px 6px 11px 6px;
	                    color: #222222;
	                    font-size: 18px;
	                    line-height: 20px;
	                }
	                .label_enf {
	                    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                    float: left;
	                    font-size: 13px;
	                    margin: -29px 0px 0 23px;
	                    font-weight: 400;
	                    line-height: 18px;
	                    color: #6B7280;

	                }
	                .groupe_ages {
	                    float: left;
	                    margin-top: 8px;
	                    clear: both;
	                }
	                .label_ages {
	                    font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif !important;
	                    float: left;
	                    font-size: 15px;
	                    margin-bottom: 6px;
	                    font-weight: 400;
	                    line-height: 20px;
	                    margin-left: 23px;
	                    color: #222222;
	                }
	                .age {
	                    float: left;
	                    width: 80px;
	                    height: 32px;
	                    margin-right: 3px;
	                    margin-left: 8px;
	                    display: none;
	                }
	                .age select {
	                    float: left;
	                    width: 100%;
	                    height: 100%;
	                    -webkit-appearance: none;
	                    -moz-appearance: none;
	                    appearance: none;
	                    background: url(https://tn.tunisiebooking.com/theme/images/bg-select-age-thematique.png) no-repeat right;
	                    font-size: 16px;
	                    padding: 0 0 0 5px;
	                }
	                .ajouter_ch {
	                    font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                    line-height: 16px;
	                    float: right;
	                    height: 20px;
	                    padding: 0px 0 0 20px;
	                    clear: both;
	                    cursor: pointer;
	                    margin: -28px 18px 10px 6px;
	                    font-size: 15px;
	                    color: #f40097;
	                    font-weight: 500;
	                }
	                .v87_280 {
	                    width: 16px;
	                    height: 30px;
	                    opacity: 1;
	                    position: absolute;
	                    top: 13px;
	                    left: 14px;
	                    overflow: hidden;
	              }
	              .v194_21 {
	                left:110%;
	                top:1% ;
	                width:20%!important;
	              }
	              .v194_23 {

	                color: rgba(255,255,255,1);
	                position: relative;

	                font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                font-weight: Bold;
	                font-size: 18px;
	                opacity: 1;
	                text-align: left;
	              }
	    					.v194_22:hover{
	    						background-color: #f40091;
	    						background-image: -moz-linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    						background-image: -webkit-linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    						background-image: linear-gradient(90deg, #F40091 0%, #F40091 100%);
	    						background-size: 300px;
	    					}
	              .v194_22 {
	                width: 13%;
	                height: 64px;
	                border-radius: 5px;
	                background-color: #f40091;
	                background-image: -moz-linear-gradient(90deg, #FF5555 0%, #F40091 100%);
	                background-image: -webkit-linear-gradient(90deg, #FF5555 0%, #F40091 100%);
	                background-image: linear-gradient(90deg, #FF5555 0%, #F40091 100%);
	                background-size: 300px;
	                background-repeat: no-repeat;
	                background-position: 0%;
	                -webkit-transition: background 300ms ease-in-out;
	                transition: background 300ms ease-in-out;
	                border: 0px;
	                margin-top:-2.2%;
	                margin-left:-3.4%;
	                position: absolute;
	                font-size: 24px;
	                font-weight:700;
									letter-spacing: 1px;
	              }
	              .v37_73 {
	                        width: 45% ;
	                        height: 55px;
	                        background: rgba(243,245,247,1);
	                        opacity: 1;
	                        position: relative;
	                        top: 0px;
	                        left: 0px;
	                        border: 1.2px solid #DDDDDD;
	                        border-radius: 6px;
	                        overflow: hidden;
	                    }
	                .list-group-item {
	                    border:none;
	                    border-bottom: 1px solid rgba(0,0,0,.125) !important;
	    								font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
	                }
	                #list_dest1:hover
	                {
	                  background-color:#fff;
	                  color: #262626;
	                }



	        </style>
<style>
.img_hotel_in{
    overflow: hidden;
}
.image_hotel{
transition:transform 2s;
}
.image_hotel:hover{
	vertical-align: top;
transform: scale(1.2);
	/*transition: all .5s ease-in-out;
	transform-origin: center center;
	transform: scale(1.2);*/
}
.slick-prev:before, .slick-next:before{
  border-radius:94px;
}
.apartirde{
  font-size: 11px !important;
  font-weight: 400;
  color:#6B6B6B !important;
}
.bloc_titre a{
  text-shadow:none;
  font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;
    font-weight: 500;
    color:#262626;
}
.prix_produit{
  color:#262626 !important;
}
.date_prix{
  font-size:12px;
  font-weight: 400;
  color:#6B6B6B !important;
}
@media only screen and (min-width:768px) and (max-width:1024px) and (orientation : portrait) {
  .etiquette{
    top:0px !important;
  }
  .avantage{
    width: 700px !important;
  }
  .bui-carousel__inner{
        width: 729px !important;
        margin-top:4%;
  }
  .owl-nextt{
    margin-left: 140.5% !important;
  }
  .carousel-inner {
    display: flex;
  }
  .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
  .carousel-inner{
    padding: 1em;
}
.card{
    margin: 0 .5em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
}
.carousel-control-prev, .carousel-control-next{
    background-color: #e1e1e1;
    width: 6vh;
    height: 6vh;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}
  .profitez_des_promotions{
    margin-top: 3% !important;
    margin-left: 2%;
    padding-right: 4%;
  }
  .offres_spec_promo{
    margin-left: 2%;
    margin-right: 2%;
    width:96% !important;
  }
  .bui-carousel__produits{
    width: 112% !important;
    height: 841px;
    margin-left: 0% !important;

  }
  .bui-carousel__item_produit{
    width: 105% !important;
    height: 285px !important;
    background: transparent !important;
    box-shadow: none !important;
    margin-right: 2%;
    margin-left: -2.5%;
  }
  #fiveGaranties{
    width:109% !important;
    margin-left:1% !important;
  }
  .slick-slide{
    width:322px !important;
    /*height: 178px!important;*/
    margin-right:-1% !important;
  }
  .conteneur_footer1{
    width: 100% !important;
    position: absolute;
    margin-top:-100% !important;
    margin-bottom: 29%;
    height: 534px;
  }
  .conteneur_footer2 {
        width: 100% !important;
  }
.footer2_1{
    margin-top: -30%!important;
    margin-bottom: -34%;
    width:100% !important;
    padding-left:3%;
  }
  .footer2_2 .tel{
    padding-left: 13% !important;

  }
  .pb-md-4{
    height: 765px !important;
  }
  .slick-slide{
    height:267px !important;
  }
    .title_slider_avantage{
      font-size: 20px !important;
      font-weight:700 !important;
      margin-left: -39%;
      margin-top: -3%;
    }
    .slider{
      margin-top:3%;
    }
    .title__slider{
      margin-top:-5% !important;
      margin-left:1%;
      font-size: 20px !important;
      font-weight:700 !important;
    }
    .slick-slider{
      margin-left: 1% !important;
    width: 99%;
    padding-top: 1%;
    }
    .rubrique-home{
    font-size: 20px !important;
    font-weight: 500;
    }
    .promo{
    font-size: 36px !important;
    font-weight:700 !important;
    font-family: BlinkMacSystemFont,-apple-system,'Roboto',Helvetica, Arial, sans-serif !important;
    }
    .row-cols-lg-5.row-cols-md-5{
      width: 148% !important;
      margin-left: 0.5% !important;
    }
    .slick-next.slick-arrow, .slick-prev.slick-arrow{
      display: none !important;
    }
    .recherche_recent{
      margin-top: 2% !important;
      width: 65.5% !important;
    }
    .bui-carousel__item_rec,.bui-card-group{
      width: 334.05px !important;
height: 77.61px !important;
    }

    .bui-card__subtitle{
      font-size:13px !important;
    }
    .recent-searches__image{
      width: 49.67px !important;
      height: 49.67px !important;
    }
    #recherche_date{
      margin-top: -4%;
    }
    .title__produit{
      margin-top: 3% !important;
      margin-left:1%;
      font-size: 20px !important;
      font-weight:700 !important;
    }
    .col_produits{
      height: 1693px;
      margin-top:-24%;
    }
    .contenu_et_sidebar{
      padding-top: 2.2% !important;
    }
    .contenu{
      position: absolute;
      margin-top: 3% !important;
      width: 85% !important;
      margin-left: -0.2%;
      z-index: 2;
    }
    .note_prix_vente div{
      padding-top:117% !important;
      padding-left:5%;
    }
    .entete_produit{
      padding: 11px 3px 1px !important;
    }
    .adresse_hotel div{
      margin-left: 3.5% !important;
      margin-top: -1% !important;
      position: relative !important;
    }
    .prix_produit{
      margin-top: -20%;
    }
    .prix_produit div{
      margin-top:-23% !important;
    }
    .date_prix{
      margin-top: -6%;
    }
.img_hotel_in{
  margin-top: 36px !important;
}
.conteneur_h2_profitez h1{
  font-size: 24px !important;
  font-weight: 600 !important;
}
.presentation_agence{
  width: 96% !important;
  margin-left: 2%;
  margin-right: 2%;
}
.conteneur_h3_offres_spec_promo h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.conteneur_h3_promo h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.conteneur_h2_agence h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.sous_presentation_agence{
  width :96% !important;
  margin-left: 2%;
  margin-right: 2%;
}
.conteneur_h3_agence_tun h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.voir_plus1,.voir_plus2,.voir_plus2_2{
  max-width:2% !important;
  margin-top:-4.5% !important;
  margin-left:96% !important;
}
.voir_plus3{
  max-width: 3% !important;
margin-top: -5% !important;
margin-left: 106.5%!important;
}
.date_prix{
  padding-top: 7px !important;
}
.owl-prev_prod{
  margin-top: 132.5% !important;
      margin-left: -2% !important;
        background-color: transparent !important;
      box-shadow: none !important;
      border-radius: 0px !important;
      z-index: 1;
      font-size: 24px !important;
}
.owl-next_prod{
  margin-top: 132.5% !important;
    margin-left: 92.5% !important;
      background-color: transparent !important;
    box-shadow: none !important;
    border-radius: 0px !important;
    z-index: 1;
    font-size: 24px !important;
}
.footer2{
    width: 100% !important;
    margin-top: 2% !important;
    padding-left: 0%
  }
  .tel{
    margin-left: -10%;
  }
  .footer2_2{
    height: 94px !important;
margin-top: -14% !important;
  }
  .pb-md-4{
    margin-top: 34%;
  }
  }
  @media only screen and (min-width:800px) and (max-width:1024px) and (orientation : portrait) {

    .footer2{
        width: 100% !important;
        margin-top: 2% !important;
        padding-left: 8%
      }
      .tel{
        margin-left: -12%;
      }
    .conteneur_footer2 {
          width: 101% !important;
    }
    .footer2_2{
      height: 94px !important;
  margin-top: -32% !important;
    }
    .footer2_1{
        margin-top: -18%!important;
        margin-bottom: -34%;
        width:101% !important;
      }
      .footer2_2 .tel{
        padding-left: 13% !important;

      }
    .conteneur_footer1{
      width: 101% !important;
      position: absolute;
      margin-top:-124% !important;
      margin-bottom: 29%;
      height: auto;
    }
    .owl-prev_prod{
      margin-top: 158% !important;
          margin-left: -2% !important;
          background-color: transparent !important;
          box-shadow: none !important;
          border-radius: 0px !important;
          z-index: 1;
          font-size: 24px !important;
    }
    .owl-next_prod{
      margin-top: 158% !important;
        margin-left: 92.5% !important;
        background-color: transparent !important;
        box-shadow: none !important;
        border-radius: 0px !important;
        z-index: 1;
        font-size: 24px !important;
    }
    .bui-carousel__inner{
      width: 779px !important;
    }
    .title_slider_avantage{
      font-size: 20px !important;
      font-weight:600 !important;
      margin-left: -41%;
      margin-top: -3%;
    }
    .slick-slider {
    margin-left: 1% !important;
    width: 106%;
    padding-top: 1%;
}
    .pb-md-4{
      margin-top: 32%;
    }

    #fiveGaranties{
    width:115% !important;
    margin-left:1% !important;
  }
  .profitez_des_promotions{
    margin-left: 2%;
    margin-right: 2%;
  }

    .footer2_1 >.footer2{
      width: 91% !important;
    margin-top: 11% !important;
    padding-left: 0% !important;
    }
    .footer2_2 >.footer2{
      width: 112% !important;
  margin-top: 0% !important;
  margin-left: -13%;
    }
    .footer2_2 >.footer2 > .tel{
      padding-left: 13%;
      margin-top: 10px;
    }
    .bui-title__text{
      margin-left: 0.5%;
    }
  .owl-next_prod{
    margin-top: 116.8% !important;
    margin-left: 93.5% !important;
  }
  .owl-prev_prod{
    margin-top: 116.8% !important;
    margin-left: -2% !important;
  }
  .note_prix_vente div{
    padding-top:111% !important;
    padding-left:4%;
  }
  .conteneur_footer1{
    /*width: 70% !important;*/

    margin-top:-92% !important;
    margin-bottom: 29%;

  }.footer2{
    padding-left: 10%;
  }
  .footer2_1 {
    margin-top: -27%!important;
    margin-bottom: -34%;
}
  .footer2_2 {
    height: 94px !important;
    margin-top: -2% !important;
}
.tel{
  margin-left: -9%;
}
  }
  @media only screen and (min-width:768px) and (max-width:1024px) and (orientation : landscape) {
    .etiquette{
      top:-25px !important;
    }
    .img_hotel_in{
      height: 71% !important;
    }
    .pb-md-4 {
      width: 1024px;
      margin-top: 22%;
    }
    .avantage{
    width: 672px !important;
  }
  .bui-carousel__inner{
        width: 994px !important;
        margin-top:-0.5% !important;
  }
  .owl-nextt{
    margin-left: 96.5% !important;
    margin-top: 1% !important;
  }
  .owl-prevv{
    margin-top: 1% !important;
  }
  .carousel-inner {
    display: flex;
  }
  .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
  .carousel-inner{
    padding: 1em;
}
.card{
    margin: 0 .5em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
}
.carousel-control-prev, .carousel-control-next{
    background-color: #e1e1e1;
    width: 6vh;
    height: 6vh;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}
  .profitez_des_promotions{
    margin-top: 3% !important;
    margin-left: 2%;
    padding-right: 2%;
  }
  .offres_spec_promo{
    margin-left: 2%;
    margin-right: 2%;
    width:96% !important;
  }
  .bui-carousel__produits{
    width: 124% !important;
    height: 882px;
    margin-left: 0% !important;
  }
  .bui-carousel__item_produit{
    width: 78% !important;
    height: 285px !important;
    background: transparent !important;
    box-shadow: none !important;
    margin-right: 2%;
    margin-left: -2.5%;
  }
  #fiveGaranties{
    width: 192% !important;
    margin-left: -25% !important;
  }
  .slick-slide{
    width:322px !important;
    /*height: 178px!important;*/
    margin-right:-1% !important;
  }
  .conteneur_footer1{
    width: 100% !important;
    position: absolute;
    margin-top:-75% !important;
    margin-bottom: 29%;
    height: 542px;
  }
  .conteneur_footer2 {
        width: 100% !important;
  }
.footer2_1{
    margin-top: -22%!important;
    margin-bottom: -34%;
    width:100% !important;
    padding-left:3%;
  }
  .footer2_2 .tel{
    padding-left: 13% !important;

  }
  .pb-md-4{
    height: 808px !important;
  }
  .slick-slide{
    height:267px !important;
  }
    .title_slider_avantage{
      font-size: 20px !important;
      font-weight:700 !important;
      margin-left: -82%;
      margin-top: -5%;
    }
    .slider{
      margin-top:3%;
    }
    .title__slider{
      margin-top:-5% !important;
      margin-left:-2.2%;
      font-size: 20px !important;
      font-weight:700 !important;
    }
    .slick-slider{
      margin-left: -2.2% !important;
      width: 107.8%;
      padding-top: 0%;
    }
    .rubrique-home{
    font-size: 20px !important;
    font-weight: 500;
    }
    .promo{
    font-size: 36px !important;
    font-weight:700 !important;
    font-family: BlinkMacSystemFont,-apple-system,'Roboto',Helvetica, Arial, sans-serif !important;
    }
    .row-cols-lg-5.row-cols-md-5{
      width: 148% !important;
      margin-left: 0.5% !important;
    }
    .slick-next.slick-arrow, .slick-prev.slick-arrow{
      display: none !important;
    }
    .recherche_recent{
      margin-top: 2% !important;
    width: 100% !important;
    padding-left: 2%;
    }
    .bui-carousel__item_rec,.bui-card-group{
      width: 334.05px !important;
height: 77.61px !important;
    }

    .bui-card__subtitle{
      font-size:13px !important;
    }
    .recent-searches__image{
      width: 49.67px !important;
      height: 49.67px !important;
    }
    #recherche_date{
      margin-top: -4%;
    }
    .title__produit{
      margin-top: 2.5% !important;
      margin-left:-2%;
      font-size: 20px !important;
      font-weight:700 !important;
    }
    .col_produits{
      height: 1703px;
      margin-top:-5%;
    }
    .contenu{
      position: absolute;
      margin-top: 9% !important;
      width: 85% !important;
      margin-left: -3.2%;
      z-index: 2;
    }
    .note_prix_vente div{
      padding-top: 95.5% !important;
      padding-left: 2.5%;
    }
    .entete_produit{
      padding: 11px 3px 1px !important;
    }
    .adresse_hotel div{
      margin-left: 3.5% !important;
      margin-top: -1% !important;
      position: relative !important;
    }
    .prix_produit{
      margin-top: -20%;
    }
    .prix_produit div{
      margin-top:-23% !important;
    }
    .date_prix{
      margin-top: -6%;
    }
.img_hotel_in{
  margin-top: 36px !important;
}
.conteneur_h2_profitez{
  margin-left:0%;
}
.conteneur_h2_profitez h1{
  font-size: 24px !important;
  font-weight: 600 !important;
}
.presentation_agence{
  width: 96% !important;
  margin-left: 2%;
  margin-right: 2%;
}
.conteneur_h3_offres_spec_promo h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.conteneur_h3_promo h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.conteneur_h2_agence h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.sous_presentation_agence{
  width :96% !important;
  margin-left: 2%;
  margin-right: 2%;
}
.conteneur_h3_agence_tun h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.voir_plus1,.voir_plus2,.voir_plus2_2{
  max-width:2% !important;
  margin-top:-4.5% !important;
  margin-left:96% !important;
}
.voir_plus3{
  max-width: 3% !important;
margin-top: -5% !important;
margin-left: 106.5%!important;
}
.date_prix{
  padding-top: 7px !important;
}
.owl-prev_prod{
      margin-top: 53.5% !important;
      margin-left: -5.5% !important;
      background-color: transparent !important;
      box-shadow: none !important;
      border-radius: 0px !important;
      z-index: 1;
      font-size: 24px !important;
}
.owl-next_prod{
    margin-top: 53.5% !important;
    margin-left: 101% !important;
      background-color: transparent !important;
    box-shadow: none !important;
    border-radius: 0px !important;
    z-index: 1;
    font-size: 24px !important;
}
.footer2{
    width: 100% !important;
    margin-top: 2% !important;
    padding-left: 0%
  }
  .tel{
    margin-left: -3%;
  }
  .footer2_2{
    height: 94px !important;
    margin-top: -9% !important;
  }

  }
  @media only screen and (min-width:1025px) and (max-width:1240px) {
    .etiquette{
      top:0px !important;
    }
    .bui-carousel__item_produit{
      width: 78% !important;
      height: 285px !important;
      background: transparent !important;
      box-shadow: none !important;
      margin-right: 2%;
      margin-left: -2.5%;
    }
    .pb-md-4 {
      width: 1183px;
      margin-top: -1%;
    }
    .avantage{
    width: 116% !important;
  }
  .bui-carousel__inner{
    width: 1124px !important;
    margin-left: 1% !important;
  }
  .owl-nextt{
    margin-left: 96.5% !important;
    margin-top: 1% !important;
  }
  .owl-prevv{
    margin-top: 1% !important;
  }
  .carousel-inner {
    display: flex;
  }
  .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
  .carousel-inner{
    padding: 1em;
}
.card{
    margin: 0 .5em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
}
.carousel-control-prev, .carousel-control-next{
    background-color: #e1e1e1;
    width: 6vh;
    height: 6vh;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}
  .profitez_des_promotions{
    margin-top: 3% !important;
    margin-left: 2%;
    padding-right: 4%;
  }
  .offres_spec_promo{
    margin-left: 2%;
    margin-right: 2%;
    width:96% !important;
  }
  .bui-carousel__produits{
    width: 121.5% !important;
    height: 805px;
    margin-left: -2% !important;

  }
  .bui-carousel__item_produit{
    width: 78% !important;
    height: 285px !important;
    background: transparent !important;
    box-shadow: none !important;
    margin-right: 2%;
    margin-left: -2.5%;
  }
  #fiveGaranties{
    width:109% !important;
    margin-left:1% !important;
  }
  .slick-slide{
    width:322px !important;
    /*height: 178px!important;*/
    margin-right:-1% !important;
  }
  .conteneur_footer1{
    width: 100% !important;
    position: absolute;
    margin-top:-62% !important;
    margin-bottom: 29%;
    height: 559px;
  }
  .conteneur_footer2 {
        width: 100% !important;
  }
.footer2_1{
    margin-top: -15%!important;
    margin-bottom: -34%;
    width:100% !important;
    padding-left:3%;
  }
  .footer2_2 .tel{
    padding-left: 13% !important;

  }
  .pb-md-4{
    height: 828px !important;
  }
  .slick-slide{
    height:267px !important;
  }
    .title_slider_avantage{
      font-size: 20px !important;
      font-weight:700 !important;
      margin-left: -64%;
      margin-top: -3%;
    }
    .slider{
      margin-top:3%;
    }
    .title__slider{
      margin-top:-3% !important;
      margin-left:1%;
      font-size: 20px !important;
      font-weight:700 !important;
    }
    .slick-slider{
      margin-left: 0% !important;
    width: 103.8%;
    padding-top: 1%;
    }
    .rubrique-home{
    font-size: 20px !important;
    font-weight: 500;
    }
    .promo{
    font-size: 36px !important;
    font-weight:700 !important;
    font-family: BlinkMacSystemFont,-apple-system,'Roboto',Helvetica, Arial, sans-serif !important;
    }
    .row-cols-lg-5.row-cols-md-5{
      width: 148% !important;
      margin-left: 0.5% !important;
    }
    .slick-next.slick-arrow, .slick-prev.slick-arrow{
      display: none !important;
    }
    .recherche_recent{
      margin-top: 2% !important;
    width: 100% !important;
    padding-left:4% !important;
    }
    .bui-carousel__item_rec,.bui-card-group{
      width: 334.05px !important;
height: 77.61px !important;
    }

    .bui-card__subtitle{
      font-size:13px !important;
    }
    .recent-searches__image{
      width: 49.67px !important;
      height: 49.67px !important;
    }
    #recherche_date{
      margin-top: -4%;
    }
    .title__produit{
      margin-top: 3% !important;
      margin-left:-2%;
      font-size: 20px !important;
      font-weight:700 !important;
    }
    .col_produits{
      height: 1693px;
      margin-top:-5%;
    }
    .contenu{
      position: absolute;
      margin-top: 4% !important;
      width: 85% !important;
      margin-left: -0.2%;
      z-index: 2;
    }
    .note_prix_vente div{
      padding-top:78% !important;
      padding-left:2%;
    }
    .entete_produit{
      padding: 11px 3px 1px !important;
    }
    .adresse_hotel div{
      margin-left: 3.5% !important;
      margin-top: -1% !important;
      position: relative !important;
    }
    .prix_produit{
      /*margin-top: -105%;*/
    }
    .prix_produit div{
      /*margin-top:-23% !important;*/
    }
    .date_prix{
      /*margin-top: -89%;*/
    }
.img_hotel_in{
  margin-top: 36px !important;
}
.conteneur_h2_profitez h1{
  font-size: 24px !important;
  font-weight: 600 !important;
}
.presentation_agence{
  width: 96% !important;
  margin-left: 2%;
  margin-right: 2%;
}
.conteneur_h3_offres_spec_promo h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.conteneur_h3_promo h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.conteneur_h2_agence h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.sous_presentation_agence{
  width :96% !important;
  margin-left: 2%;
  margin-right: 2%;
}
.conteneur_h3_agence_tun h2{
  font-size: 18px !important;
  font-weight: 600 !important;
}
.voir_plus1,.voir_plus2,.voir_plus2_2{
  max-width:2% !important;
  margin-top:-4.5% !important;
  margin-left:96% !important;
}
.voir_plus3{
  max-width: 3% !important;
margin-top: -5% !important;
margin-left: 106.5%!important;
}
.date_prix{
  padding-top: 7px !important;
}
.owl-prev_prod{
  margin-top: 44.5% !important;
      margin-left: -4.5% !important;
      background-color: transparent !important;
      box-shadow: none !important;
      border-radius: 0px !important;
      z-index: 1;
      font-size: 24px !important;
}
.owl-next_prod{
    margin-top: 44.5% !important;
    margin-left: 101% !important;
    background-color: transparent !important;
    box-shadow: none !important;
    border-radius: 0px !important;
    z-index: 1;
    font-size: 24px !important;
}
.footer2{
    width: 100% !important;
    margin-top: 2% !important;
    padding-left: 0%
  }
  .tel{
    /*margin-left: -10%;*/
  }
  .footer2_2{
    height: 94px !important;
margin-top: -3% !important;
  }
  }
  @media only screen and (min-width:1241px) and (max-width:1880px) {
    .avantage{
      overflow: hidden;
    }
    #fiveGaranties{
      width:137% !important;
      margin-top:2% !important;
      margin-left:-2% !important;
      position:relative !important;
      float:left;
    }
  }
  .slick-prev{
    border-radius: 26px !important;
    left: -22px !important;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.17);
  }
  .slick-next {
    border-radius: 26px !important;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.17);
    right: -38px !important;
  }
a:hover{
  color:#262626 !important;
}
.text-center{
  font-family: -apple-system,'Roboto',Helvetica, Arial, sans-serif;
}
.carousel__navigation {
  background: #fff;
  box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.16);
  width: 30px;
  height: 30px;
  /* z-index: 0; */
  font-size: 16px;
  border-radius: 100px;
  position: absolute;
}
.carousel__navigation i {
    width: 50%;
    height: 50%;
    padding-top: 24%;
    padding-left: 38%;
}
.bui-card-group{
  width: 371px;
  height: 100px;
  margin-right: 0%;
  background: #FFFFFF;
  /* box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.16); */
  border-radius: 6px;
  margin-top: 1%;
}
.box_produit{
  box-shadow: 1px 3px 7px rgba(0, 0, 0, 0.13);
}
.conteneur_footer1{
  background-color: #fff !important;
  padding-bottom: 2%;
}
.txt_soush3_0, .txt_soush3_1{
    background-color: #fff !important;
}
.title__produit{
  /*position: absolute;*/
  font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  line-height: 28px;
  margin-top: 1.5%;
  color:#262626;
  -webkit-font-smoothing: antialiased;
}
.title__slider{
  position: absolute;
  font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
  font-style: normal;
  font-weight: 700;
  font-size: 24px;
  line-height: 28px;
  margin-top: -2%;
  color:#262626;
  -webkit-font-smoothing: antialiased;
}
.subtitle__slider{
  position: absolute;
  font-family: -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 28px;
  margin-top: -1%;
  color: #6B6B6B;
}
@media (min-width: 1173px){
.entete_produit {

    height: 100px !important;
        padding: 10px 4px 1px !important;

}
}
.etiquette{
  left: 13px !important;
  position: relative !important;
  top: 0px ;
  text-decoration: blink !important;
  background: url() no-repeat !important;
  width: 76px !important;
  height: 34% !important;
  margin: -252px 0 0 0px !important;
  color: #262626 !important;
  padding: 0px 0px 0px 0px !important;
  text-align: center !important;
  background-color: rgba(255, 255, 255, 0.9) !important;
  font-size: 14px !important;
  font-weight: 500;
  border-radius: 0px 0px 2px 2px;
  line-height: 15px;
}
.slick-list{

    margin-left: 0.4% !important;
    margin-right: 0.6% !important;

}
.slick-next{
  margin-right: 20px !important;
}
.slick-prev{
  margin-left: 3px;
}
</style>


<link type="text/css" href="https://tn.tunisiebooking.com/theme/responsive-design/css/style-responsive33.css" rel="stylesheet" media="print" onload="this.media='all'"/>

<link rel="stylesheet" type="text/css" href="https://tn.tunisiebooking.com/theme/gallery_slide/slick/slick22.css" media="print" onload="this.media='all'"/>








<link rel="stylesheet" type="text/css" href="https://tn.tunisiebooking.com/theme/gallery_slide/slick/slick-theme223.css" media="print" onload="this.media='all'"/>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z1XN6CSX2D"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-Z1XN6CSX2D');
</script>
<script>
 window.dataLayer = window.dataLayer || [];
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VPNTQ');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="gsghjEKFHs15jZK5Pjd0NquDuEdTlxBfnNuu3aoEstY" />
</head>
<style>
body {
/* désactiver la sélection pour copier/coller */
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
font-family: BlinkMacSystemFont,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}

div.wrapper {
    float: left;
    width: 100%;
    background-color: #ffffff !important;
}
.entete1 {
    width: 100%;
    float: left;
    height: 15vw;
    max-height: 75px;
    border-bottom: 1px #dbdee3 solid;
    background-color: #ffffff;
}

.menu1 {
    float: left;
    background-image: url(https://tn.tunisiebooking.com/theme/images/menu-thematique-mobile.png);
    background-repeat: no-repeat;
    background-position: center;
    width: 15%;
    min-height: 100%;
    background-size: 47px 45px;
    border-right: 1px #dbdee3 solid;
}
#closm {
    display: none;
}
#closm {
    float: left;
    background-image: url(https://tn.tunisiebooking.com/theme/images/fermer-menu-thematique-mobile.png);
    background-repeat: no-repeat;
    background-position: center;
    width: 15%;
    min-height: 100%;
    background-size: 47px 45px;
    border-right: 1px #dbdee3 solid;
}


#men {
    float: left;
    position: absolute;
    z-index: 60;
    background-color: #fff;
    top: 10vw;

    width: 100%;
	height:auto;
    display: none;
}
@media (max-width: 500px)
{
#men {
    top: 10vw;
}
}
@media (max-width: 800px)
{
#men {
    top: 10vw;
}

}
@media (max-width: 900px)
{
#men {
    top: 10vw;
}

}
.logo1 {
    float: left;
    background-image: url(https://tn.tunisiebooking.com/theme/images/logo-thematique-mobile.png);
    background-repeat: no-repeat;
    background-position: center;
    width: 69%;
    min-height: 100%;
    background-size: 213px 44px;
}

.phone {
    float: left;
    background-image: url(https://tn.tunisiebooking.com/theme/images/phone-thematique-mobile.png);
    background-repeat: no-repeat;
    background-position: right;
    width: 15%;
    min-height: 100%;
   /* background-size: 42px 45px;*/
}

#men ul {
    list-style-type: none;
    padding: 5px;
    margin-top: 0;
}
#men ul li a, #men ul li a:visited {
    color: #003581;
    text-decoration: none;
}
#men ul li {
    border-bottom: 1px #003581 solid;
    padding: 12px;
    cursor: pointer;
	font-size:15px;
}

#men ul {
    list-style-type: none;
    padding: 5px;
    margin-top: 0;
}
.hotel_tunisie span {
    font-size: 24px;
    float: left;
}



.onglet_hotel_etranger {
    float: left;
    width: 33.5% !important;
}

.onglet_vol {
    float: left;
   width: 33% !important;
}
.svg-icon_bleu {
  width: 30px;
  height: 25px;
  vertical-align:middle;
  float:left;
  margin-left:38px;
}

.svg-icon_bleu path,
.svg-icon_bleu polygon,
.svg-icon_bleu rect {
  fill: #003586;

}

.svg-icon_bleu circle {
  stroke: #003586;
  stroke-width: 1;
}

.svg-icon_jaune {
  width: 30px;
  height: 30px;
  vertical-align:middle;
  float:left;
 margin-left: 30px;
    margin-top: -5px;
}

.svg-icon_jaune path,
.svg-icon_jaune polygon,
.svg-icon_jaune rect {
  fill: #003581;

}


.svg-icon_blanc {
  width: 30px;
  height: 30px;
  vertical-align:middle;
  float:left;
  margin-left:55px;
}

.svg-icon_blanc path,
.svg-icon_blanc polygon,
.svg-icon_blanc rect {
  fill: #fff;

}

.svg-icon_blanc circle {
  stroke: #fff;
  stroke-width: 1;
}

.vol {
    width: 100%!important;
    padding: 13px 0 15px 5%!important;
    margin-left: 3%!important;
	}

	.autres_onglets
	{padding:0px!important;}

	.logo_conteneur img {
    float: left;
    width: 83.45%!important;
    height: auto;
}

.logo_conteneur {
    float: left;
    width: 40% !important;
}
.slick-next,.slick-prev{
  margin-top: 2.5%;
}
body{
  font-family:  -apple-system, 'Roboto',Segoe UI,Helvetica,Arial,sans-serif !important;
}
</style>
<div class="contenu_et_sidebar" style="padding-top:1.2%;">
  
    <div class="contenu">
<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
 <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">

 <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_36/" title="Houda Yasmine Hammamet 4 etoiles">
   Houda Yasmine Hammamet </a>


 </div>



 <div style="margin-top: 7%;width: 100%; margin-left: 2%;">

   
   <img src="https://tn.tunisiebooking.com/theme/images/star4.svg" alt="star4" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
   
 </div>
 <div>
 </br>
   <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: -4%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspHammamet</div></span>
 </div>
<div>



        </div>
       <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
       <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">66<sup style="top:-0.8em !important; font-weight:500;font-size:15px" class="devise">DT</sup></div>
       </div>
       <div class="date_prix"  style="padding-top:3px;top: -92.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 16/05/24</div>
 </div>


<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_36/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/Houda_Yasmine_Hammamet_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
 <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">

 <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_59/" title="El Mouradi Hammamet 4 etoiles">
   El Mouradi Hammamet </a>


 </div>



 <div style="margin-top: 7%;width: 100%; margin-left: 2%;">

   
   <img src="https://tn.tunisiebooking.com/theme/images/star4.svg" alt="star4" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
   
 </div>
 <div>
 </br>
   <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: -4%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspHammamet</div></span>
 </div>
<div>



        </div>
       <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
       <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">88<sup style="top:-0.8em !important; font-weight:500;font-size:15px" class="devise">DT</sup></div>
       </div>
       <div class="date_prix"  style="padding-top:3px;top: -92.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 04/04/24</div>
 </div>


<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_59/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/El_Mouradi_Hammamet_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->

<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
 <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">

 <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_250/" title="Movenpick Resort & Marine Spa 5 etoiles">
   Movenpick Resort & Marine Spa </a>


 </div>



 <div style="margin-top: 7%;width: 100%; margin-left: 2%;">

   
   <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
   
 </div>
 <div>
 </br>
   <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: -4%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspSousse</div></span>
 </div>
<div>



 <div style="width: fit-content;font-size: 14px;font-family: -apple-system,Roboto,Segoe UI, Helvetica, Arial, sans-serif;margin-top:2%;margin-left:2%;/*position:absolute;*/;float:left;">
          <span style="padding: 2px;border-radius: 3px 3px;border: 1px solid #E0E0E0;">Burkini interdit</span>
            </div>       </div>
       <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
       <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">154<sup style="top:-0.8em !important; font-weight:500;font-size:15px" class="devise">DT</sup></div>
       </div>
       <div class="date_prix"  style="padding-top:3px;top: -92.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 04/04/24</div>
 </div>


<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_250/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/Movenpick_Resort_&_Marine_Spa_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->

<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
 <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">

 <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_424/" title="Jaz Tour Khalef 5 etoiles">
   Jaz Tour Khalef </a>


 </div>



 <div style="margin-top: 7%;width: 100%; margin-left: 2%;">

   
   <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
   
 </div>
 <div>
 </br>
   <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: -4%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspSousse</div></span>
 </div>
<div>



 <div style="font-size: 14px;font-family: -apple-system,Roboto,Segoe UI, Helvetica, Arial, sans-serif;margin-top:2%;margin-left:2%;/*position:absolute;*/;float:left;">
            <span style="padding: 2px;border-radius: 3px 3px;border: 1px solid #E0E0E0;">Interdit aux celibataires</span>
             </div>       </div>
       <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
       <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">156<sup style="top:-0.8em !important; font-weight:500;font-size:15px" class="devise">DT</sup></div>
       </div>
       <div class="date_prix"  style="padding-top:3px;top: -92.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 04/04/24</div>
 </div>


<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_424/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/Jaz_Tour_Khalef_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->

<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
   <div class="bloc_titre" style="width: 68%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1.2;margin-bottom: 3%;">

   <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_18/" title="Radisson Blu Palace Resort et Thalasso 5 etoiles">
     Radisson Blu Palace Resort et Thalasso     
     <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -6px;margin-left: 3%;"/>
        </a>
   <div style="margin-top: -6%;width: 100%;margin-left: 48%;position: relative;">

     <!--
     <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
     -->

   </div>
   </div>

   <div>
   </br>
     <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: 2%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspDjerba</div></span>
   </div>
            <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
         <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">230<sup style="top:-0.8em !important; font-weight:600;font-size:15px;" class="devise">DT</sup></div>
         </div>
         <div class="date_prix"  style="top: -89.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 15/04/24</div>
 </div>



<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_18/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/Radisson_Blu_Palace_Resort_et_Thalasso_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->

<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
 <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">

 <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_227/" title="Golden Yasmin Ras El Ain 4 etoiles">
   Golden Yasmin Ras El Ain </a>


 </div>



 <div style="margin-top: 7%;width: 100%; margin-left: 2%;">

   
   <img src="https://tn.tunisiebooking.com/theme/images/star4.svg" alt="star4" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
   
 </div>
 <div>
 </br>
   <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: -4%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspTozeur</div></span>
 </div>
<div>



        </div>
       <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
       <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">96<sup style="top:-0.8em !important; font-weight:500;font-size:15px" class="devise">DT</sup></div>
       </div>
       <div class="date_prix"  style="padding-top:3px;top: -92.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 01/06/24</div>
 </div>


<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_227/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/Golden_Yasmin_Ras_El_Ain_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->

<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
 <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">

 <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_471/" title="Thabraca Thalasso & Diving 4 etoiles">
   Thabraca Thalasso & Diving </a>


 </div>



 <div style="margin-top: 7%;width: 100%; margin-left: 2%;">

   
   <img src="https://tn.tunisiebooking.com/theme/images/star4.svg" alt="star4" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
   
 </div>
 <div>
 </br>
   <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: -4%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspTabarka</div></span>
 </div>
<div>



 <div style="font-size: 14px;font-family: -apple-system,Roboto,Segoe UI, Helvetica, Arial, sans-serif;margin-top:2%;margin-left:2%;/*position:absolute;*/;float:left;">
            <span style="padding: 2px;border-radius: 3px 3px;border: 1px solid #E0E0E0;">Interdit aux celibataires</span>
             </div>       </div>
       <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
       <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">212<sup style="top:-0.8em !important; font-weight:500;font-size:15px" class="devise">DT</sup></div>
       </div>
       <div class="date_prix"  style="padding-top:3px;top: -92.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 10/04/24</div>
 </div>


<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_471/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/Thabraca_Thalasso_&_Diving_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->

<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
   <div class="bloc_titre" style="width: 68%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1.2;margin-bottom: 3%;">

   <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_221/" title="Iberostar Royal El Mansour et Thalasso 5 etoiles">
     Iberostar Royal El Mansour et Thalasso     
     <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -6px;margin-left: 3%;"/>
        </a>
   <div style="margin-top: -6%;width: 100%;margin-left: 48%;position: relative;">

     <!--
     <img src="https://tn.tunisiebooking.com/theme/images/star5.svg" alt="star5" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
     -->

   </div>
   </div>

   <div>
   </br>
     <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: 2%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspMahdia</div></span>
   </div>
            <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
         <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">136<sup style="top:-0.8em !important; font-weight:600;font-size:15px;" class="devise">DT</sup></div>
         </div>
         <div class="date_prix"  style="top: -89.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 04/04/24</div>
 </div>



<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_221/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/Iberostar_Royal_El_Mansour_et_Thalasso_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->
<!------------------------------------------------------------------------------PRODUIT----------------------------------------------------------------------------->

<div class="box_produit" style="border-radius:2px">
 <div class="entete_produit">
 <div class="bloc_titre" style="width: 77%; font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;font-weight: 500;line-height: 1;">

 <a onclick="ga('send','event','Détail hotel','recherche hotel','via lien texte')" href="https://tn.tunisiebooking.com/detail_hotel_89/" title="Skanes Serail & Aquapark 4 etoiles">
   Skanes Serail & Aquapark </a>


 </div>



 <div style="margin-top: 7%;width: 100%; margin-left: 2%;">

   
   <img src="https://tn.tunisiebooking.com/theme/images/star4.svg" alt="star4" width="78.83px" height="16.17px" style="margin-top: -6px;"/>
   
 </div>
 <div>
 </br>
   <span class="adresse_hotel" style="float: left;margin-left: 2%;margin-top: -4%;font-size:14px;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif"><img class="lazy" data-src="https://tn.tunisiebooking.com/images/localisation.svg" alt="localisation" style="max-width: 2.5%;float: left;"><div style="margin-top:-0.2%;margin-left:0.6%;position:absolute;">&nbspMonastir</div></span>
 </div>
<div>



        </div>
       <div class="prix_produit" style="position:relative;top: -77%;left:1%; padding:10px 11px 0;font-weight: 600;font-family:-apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">
       <span class="apartirde">à partir de *<br></span><div style="margin-top:-21%;padding-top:3px;font-size: 32px;font-weight: 600;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif;">115<sup style="top:-0.8em !important; font-weight:500;font-size:15px" class="devise">DT</sup></div>
       </div>
       <div class="date_prix"  style="padding-top:3px;top: -92.5%;margin-left:25%;position: relative;;font-family: -apple-system,'Roboto',Segoe UI, Helvetica, Arial, sans-serif">prix du 16/09/24</div>
 </div>


<div class="img_hotel_in" style="height: 252px;background-image:url('');" onclick="trackOutboundLink2('https://tn.tunisiebooking.com/detail_hotel_89/','Détail hotel','recherche hotel','via lien image');return false;">
 <img class="image_hotel lazy" data-src="https://image.resabooking.com/images/image_panoramique/Skanes_Serail_&_Aquapark_2.jpg" alt="hotel" style="width:100%; height:100%;border-radius: 0 0 1% 1%;"/>

</div>
</div>
</div>
<!-----------------------------------------------------------------------------SIDEBAR----------------------------------------------------------------------------->
<div class="sidebar" style="display:none">
     <div class="panel-info" style="margin-top:20px; ">
          <!--<div class="wrapper" style="border-radius:1%">
		  <a href="https://openvisatunisie.com/rendez-vous-g" rel="external noindex,nofollow" target="_blank" style="cursor:pointer">
	          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="373" height="208" viewBox="0 0 373 258">
  <defs>
    <style>

.onestar {
  width: 16px;
    height: 19px;
    background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
    background-size: 72px 24px;
    background-size: 71px 13px;

}
.twoostarts{
  width: 29px;
    height: 19px;
    background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
    background-size: 72px 24px;
    background-size: 71px 13px;

}
.threstars{
  width: 43px;
    height: 19px;
    background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
    background-size: 72px 24px;
    background-size: 71px 13px;

}

.foorstars{
  width: 55px;
    height: 19px;
    background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
    background-size: 72px 24px;
    background-size: 71px 13px;

}
.fivestars{
  width: 88px;
    height: 19px;
    background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
    background-size: 72px 24px;
    background-size: 71px 13px;

}
      .cls-1, .cls-2, .cls-4 {
        font-size: 7.236px;
        text-anchor: middle;
        font-family: Roboto;
      }

      .cls-1 {
        fill: #081c73;
        font-weight: 500;
      }

      .cls-2 {
        fill: #b5367e;
      }

      .cls-2, .cls-4 {
        font-weight: 700;
      }

      .cls-3 {
        fill: #822a7b;
        fill-rule: evenodd;
      }

      .cls-4 {
        fill: #fefefe;
      }
    </style>
  </defs>
  <image id="Arrière-plan" width="373" height="258" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAXUAAAECCAYAAAAB2kexAAADpElEQVR4nO3UAQ3AQBDDsNv4c+7ziGwKkfJt2wGQ8MsI0GHqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg4QYuoAIaYOEGLqACGmDhBi6gAhpg5QcXcPH/EGAOhTIpEAAAAASUVORK5CYII="/>
  <image id="logo-2" x="25" y="67" width="148" height="122" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJQAAAB6CAYAAABZcnomAAAgAElEQVR4nOy9CbBlx3EdeLKq7vKWv//eG419BwgQILiCuyjBIinR2kYSpbA8Co0VYY/tkUb2jEeOGXlsayRPhDUzGtMOSeYoaGu1aFEiRXGnuIEEQIIgQewNoBu9/v772+69teRE1r3v9+/u33uTUgSYHS+6+//37qt7Kysr8+TJLPonn/sH2EqKkOLe7lO4u/sMtqdLmE9WMAoJGABt+YlzCAGUEqCBeIHTZfyzALBlXPyXEBQcCAElTWNEO8EwAAUYchjYAMvh4sd9gaKIJ0uvf/nFYfdHFsv8lxXx7211izd1evLejZ+t2hQHh225bdigcEOnhxu7PVRBbbxHEc8/P5zc8Uxv4mBg6l3JcRMYCVX4anU/HireipyG8WcBChW6SGiI2+lj2IvHMcQUKnTiM6ZNkxhgwNg03is5wL+JwsxIdRsq3upW2nxFZATgDwD8IoAHT7+gfKuhc3+3KLtjiq/TFP+dAP5fAHdcyQFTVIOAR8s34MvF26IyXQkxV3KQf3OFETiLlkDHB3fFbZUF8LXmdcbFE2Jc1+md81sTFfD8YAItHXBNu7/ZSh0H8A0AV9Q6JVTiBXsrPlc+gClaAV+hZ/KyUCiCx9DfgFGYwnTyTSS0eoqZvsJyiimSrez6ibWt7GOreYmGF4jKzhh5jTKcYk+/AOAxAMtXaphimTwSrIR5pCivmDLh5bDljUWUSjyDvrsRlqejL3M5L2oU4FxbmWxfbe22+pV4k28D8C8BvHZs1VIV8Nygi4UyR67deJr7AI4CKK/EcxBlIgr4ank/vlB8H1pXaKsby8tkyzspolgDewMm8ocv+RqiQgVrLFVZ/PeufITCi46cFNmyppMK13d6cCFO46nDADoAtjVWKooooPxq6A0OjTqYTSskFC73ljdERqHh8VD5JnyleBsm1ZXb6sbyslMoESJ72e65Z8KBQQcLVQuvn13AZFJfkxplmkoq3DG5ipb2WLEprNfRstVKAw/g4wC+0mxlbONnLPYlQwx9guf7E9jTGuKOqRWoKxBMiBNuyOKh8i0xoptUq1dcmfByVagrJbJFifI8vDIfJ76lPEpWmE3KqEyZCtGHypRD3xmsVSl25oVYLNGQ1eYV39MxDrdPrmE6rbC/P4HVKsGBYQeaApLGMbl0tSLkNMKXiu/BV6s3YkKtfVuUCd9VqMsXQwFFUHh8fQZt5TCTlFExcuVhWcVpk8kTR/tY0UIVNK5uDeLvRGz0szzunl7FlLEYeI1QWzHk2uPAsBstVxIxtUtVAsaXinfg0ep1aFP/26ZM+K5CXRkRx7zyCms2xz1TK5gwNkZrm2XsxB8ataKpubbTjz+bNA63Ta5h0tiodKdPtVjBgTON839pNkq2u8er+6KV+rY/i2/7N7xMRDURn/hWns9uAUSpjpZ5VB5xvsX6zKUVhl6f1W7ItS/Hi5JILqMRHH/7p/tlAxtcYZHnNg1g+wUsSmoiuTkAXRL9ELSyzGFUiNZpkzWTf9wJ4IcB3N78/7JEk8eH+j/+HVEmvJwVimKgdckiCvJ3APwfTegfRXwfbizKJhHF++8B/C6AfwvgFmzayp7rTUbFaqTbpG9+G8BPMJCPN7pLfaVU4oi76tvqN22Wl+WWJ4njJXs75pJvgS/NCIg2viR+MwEVNZGapEwEJlgo8oghNRCBKNzPSm6YmVzl9ccAPIGYWCX0vYmOva3XtqCgLwB4DsAxAsLlqEFKFf6499MokZ6S0P12ysvUh2LY0MVydTvmsscRLn47KAj4c6qfXyERW8SMJlexULbw6Oosbp5Yx572ED6oATN9rgp0bOj10nRaHUSM7lS0UCeKHI+tzOHO6WXYoIcE/AcAHxKFGqdkLlVEiXphKqaZCFcOID2XvIydckbFE1gqRameuAClOmOFS0LYigO+tzXEXVMr0dFGk+j9zImduH/2BK5u948zq1/tGte9sds70k3s8vGipZarLO5isj3uH3QBYtw1vcJDr481ynRZksDiD3s/g/UwA3V52/tFycs6ypNV63gCI38buskhBD7b9kfwod/sdCeFmbAzH0Vlsps4TLJNZRTwqRM78a6dh910Wjy/Ky9So4a3HR217gfQBrAG4JuB6aCmOu3SsyZ67GPEvfAmfsfFSosG+JPRe3HU7Y3o+HdSvgsbXJAwtOo2SsVRsWSi57IK2/NhRMupDnB2S2qvYRAcZqbVqkHBA9NtA2f+o4O6lWoH/kjlzL/0wPvvmFrFzROrODRqRyhh4BJcgh6dIt8pn+l0+S5scMFSK5VWE3Ed5kbh2glG4aixKjRJwC8R8Jee1X82it+2uzVUx6sMi2UePZgATPhAuTjzPtCcZZq6ZWIV988fz/rezBIgr2kCZlC/8osfJ0E37NW/DvmuhbooqVe9KJWkQkY+YLEymEwYE4ltu6BuZGC273RrLi12v3XHURwcdPC1tVncO7N0fCYp19YVxxC+YM078pF/xfQqDb15B4F+sFng/UaRUgB/BuAjMd98JpNzS1HksRD2YMSdvxYr9V2FuiTh+EcsU99pHBmluH/bynpK1QePh3RNEy/uyIs1H9RrPSuXaV8dG7VuAairEY5qcouew7Fcu2fnsjLv2eR7mem/JYoKVUWfunajBgA+WQVVjdkM55Ou6uOT/R/CUb8PLep/O9ip55S/KQolDzJrVmXWAIdJvUvEaKpo/q6af//12PMtRKK0KrQwcNzf23rh954f6D/b3dL5nnbxU0Nv/r4YtJby9nDRmj1WtNM9+eDXUjV8OGDKjrx+OjC1Kd43h+Y5pJu+hQITX9ftwShGwef3UCZUiYnREMq677gy4a9JocQ3uArATgA74v8p/mweCjkUteBDKyKOFNllrmErlo2zu9i8VgAcAXBIHODLwWyEIpIqh5E3F7xNRDeceY6Bt2hyBwLrRw4Mrx0eK7YNr2ovYVt2Yn65zF4j2RNBP2Vqj42ypzVt+9hUwk/Npy3c2HkSZZCUDIspKZkpzgefJCj3+96Ee2aW8fj6NMIFwJye/7rc8Vq+Ewol6YRrmHkvBboejFtAuAbA3hgRESY3WIuKQIZBwctkxcdaP9ozGNn9mktEL9WItX9BITwFYD8hPHsxOI6igBXbwdFyF27snhBwcau3idWcHfPnUCuUWMx7Jg394ykzeijX2fLj6zedWCi3YyZ9cXKt6nUDOwvWiSDzUkXWMSF1PHFdGaYPdkxVpXrajdxxQ+DJWGjWpGzUBmygJ69tr0fyFH97tSRtFjqPrX+TqmEFxwpeSM+aQbwJ1aDmveORyf/zb5dCqSZnJaU/94BxFxxuZnBNeaWt8h0UJ5cRglftkWeNhAephjMcf3OKYkmStQv4vYTwOgL7AN0PlL1g0XmIoR4G+JsAvtUo39kHSozlqo3FSuO+mYM4XkycnotDk4/7hcairskYPKPSSu3Z1+EbppNqatVmE4Hdates8XrVnt6P6+9PaKSLkEQOlGBNs5neZkj9d4TBG3uu/dn9/Ws/tmf+IHs2oZksmZVy5E1yvMxVYFVe3+2Jwu32UEOusatzqtYl6N3VAP4bSQ3JYpHlHNmdsILLhR52hIIO6hwDw0jYIQl10igIIz+OWziwtcqHm660Qom1uRXA6wH8LQCviD9j5PBbbuhNzjMOiIgte8rKodlZOWpTimXf4mWlMUoUgqz0JkaSV4iROMMESy1jMTHlqHN3QHYbAz9KCC8ALDTbTzWKdfRsg24ri8f783BHb8E7t72IgT/jsUgJ6t0AvX1soeQHmoimMkEf9fbDw6mbBy4JXV0I+q1W7XQCnlJK1Ws9kb8JXYZ/Z+Dyew1oD0N98XBx9crV7QMfScmPAGOGzgwThGQmKSvH+o/LoJOh069S4P2m3hq3rHoYi2mez0WIFEv8s4bj7sfTkmAEi4wP8j3wSOlaPKLatMoFumyjwY7qX/MH45ACA+qKWai0sUhCu/jbAPYBmNr47Tm3/jgoEuyEWVWlmnUVpjoMZQra5h3aZYblIuN1r2ETBnQAOY+09GgHi0lY6iQeWSaXUXApITQmnG8B8XuZ1SfAeH9TjnRGfZvwmI6UgjHNYHL3k+j7idMnZYXA71cUZLveG2JBpoIhH23V0WLSHhlNJaIyRtu4xjWNdwZ50IIKsa9tkNhb1Wrp8KoK+RvW3fTHWmb/xzvGfv5Y0ZE0Du9pD0LhNT24vL06VHQnZzN7PFV+HcTnDUYy5eN3X6BKCaj2yk1zZerpoqhbCUqUmMAL/GpYtKvr6EHVwrKRq1tuiZ3yLOsK8c5jAuBKKJT4Qz8B4McBXN9o+oUKoaGSMNiWesaWapsGQqqjD66Uo672aFcWay7n5ZGCVZbasDQFh3bGMEaS8gSn1AbJY/xYuA1wuwidn66Qv73Gdfi3AfrG5vHJJyZ1iS+v7MWHj9+E75nfjxXb2ryBOID/3LH+EQXea1BBk4pWp/LaHRlOV0OfqURZMRAy61LnwvHGiFy9lSmvoBRBMyndBtR1LaoeGDp87M8OX1seL7PyFVM93Dm9Iso3uVzl/6NY9pL1+wLj0USFYL06p0LJF7ZUGcvvL0BkWK8D8GbaeArYWP0SE8kmpjEQpeLn+D61jPniGv6ynqWDKVDaCm0fOCNQRkDe0shfvByFkrD++wBIc4RXNQSyixaKlfQ+WLRtoeYRKMkVlw1fSX7HiqEyS1OJR9sJH5IpMQGKKK4O36DCp69JKRkKHIKxhZ/Qns3VCuFnAboPwO8A+OMmnxalrkhR+J2X7o5ktDfNHkLPZpunqzcKnc8yp2+YTVe3z6Sr1lClnxttq46Wk0oiiUwFD1JWNFlDS4gRiGKIpxVURkQqmismRVBZpujVhef7FsrWN05Upqo8ceGVEO7m1qr0rZoCL5fJb4dmmz2fMs3oVfyX1ffgkeErI8Bpz0HNUUCm4aUm8Pb45JrokGOXCBW5XWWQFLOWZhPkSJu+vzV3OuvdZf5qdbc+zBWb7rqf0hVyI+8Pgb52qQo1D+DnAfxks9VdMuAhUYRHUhZqm3PothRXqlaQOnCuFUaiDK2ZjObGqNZNG8bJ2lO/nhsHn8hx5adsaSeEs9RS5NoAvbbZkkWxfsMQPznGG4SXJIr1/kN3xvjyNdPHI5QwFsPdTwTkP3ii6r71aDnbDxgMlsqOJk66Hc0h1TqCEGL/iUmPHY1a1VlHtxWElBymjHgm1V3OV/+xbcoPz7L7jUT5400N37EA/DNNMdQ98pnju3Db1GpT8LC1TKg+/mztnfiL3vdFHhRORmpbSgDvYtb3FGy0ZQMXpGJPggfvUrIhJU/TemA7qtKTpu+ndd9Pap/tSAcqC9qP7HbalXrsSJd0EXS65NLFntUfv1iFohi11Vbph5s9+JKl3uqUK2neVjSTElxSO3h02ldiw2KNVWYrRTpVUSViVFxwlx2yFKjxgFB/SpK4f1fwMAJ+k4CPji9a+z4BHzp2Aya0ww2d1RilRXSI1VMvVvmX/2pp9s1VYL096Y9uaI/mplPkPoKO0RyNo/467hYvq/lvTg5dXch3+CU3SU8UV3dWq+KO3frxYioZ/X/P9GeOdwzjxm5/1JSgR7RLaDHn84nElgvDYa9eQluduxiBwOlaaL/9QLX9tZN6gAldVh1V2haVNKWHYd6suxk9SGf0up3VQ+7oImmrgiZ1qXId2l/vbTOPr+9Qy7bkuWRBX9/u4Qbiry9X6acvRqHkQb2OQf9zs9VdxnbJ4+4focRUWdKMYBwCEZxDSc5UsrMJNde3IXND1xVvRplYRCDRlo8DV/JP4gcyFXa4oLoM+uA4gpLPtpTFR09cD3vilNvkwPj8833zt3dno1v2peCW1h2tgvG+jj+jXnJ9FQEZJT3TVSVaZOXXbs233P5yLjwyvCZ7eHCDaqsevr+73JvGWjVwGVadi3GD2oQ8nftuY8SLRXc9rsssrs8+c55nI9hA0v7G6OrX7UmWduxLF8sZPXDTahCmzFC3qTSZtjqBMwk5YxBXipFFIT5j6XVYKE2y5lSybNtchB3qpva6v29q6auZCkfPqRRqIwQlMebfm8L9MoNef84Rn+9umr+YA5doFSPaTp6yXKFUl9AY6gzhjT4GPmhMhpZK0yyxpMkGSWPIdDtCKJ3GKCgqvL7neJX+at+ZriH+gwaNj3duuIr4VM/rDV4SgR+8Jl//y5vaw1tv6PqpRBFGYbxJc4MMKvHfZOUjVy4wWBTJP1XscA8Pr8YzxfZk0XVpGNqYM4yny9tKQ84GUvjKsdfhh/xDeH330Yjgn+9u5ZuLsCu+pKPK+aeAKSF3y9u7j93VjeOrVAafErwmxRRYURnS6H8NfB7/5jrAQc4hrLm0OF61pQZRa2J9okqxZOcfK4L5yJ581D+rQskF+qGFYcgoJfs20vgVDb7vsupXmxRECOCK0qrAdut1p6XgtOJw2Wwa2XZkUrtJiYTgV6qWs5yZyrMb+MSt+YSWqtQt2QRrTutlm3LPJrTu1XUA/veOCrlj+p1xYwqxMDvSEsYmKAONI8e17Wnx5YmEVhPQtBRqMo8BAhWrTDq6QEaCuXNYc7l9vNhjHxlerZ4odpglO5FmyupZNcBO04vf8VR148RamOl4SuJW/emDb8cvbn8/XpV9ISqmPetzoejOttUU2mrp/M8/Wt4q0wg/kJK/1cKgZJMMkIHFd/Ob33ky3hPgI1ccrfuqTcOqTQQiUVIpnauAVWceWXHJI5O+gjmbemTK4rH+TVI2fd+OrPfL3ub3rbk0PrRLtSHyWHwQn0K5ttGFSbu5YEbMITqEF2+d6tGPqR1CvZ0yJVrG+ef786PPL+8bHhjNhlEISc+psOa1HtokGXiJgZCKGddMlAowof1uEoCPVQXwB8ZKVbHC1fkAU8bFx9xEQo9Op/xZJrzH8ebR1MF2wt73Qqt6fLjbf2VwNT9Z7kzWXCvLlaPtST9ibrGWCnU1sIO6LlXVvYH9c4L6702O4DdPvBc/PpngNv1QrEJuqwKSPTi5D3oEnkIZtguZ+YKenViaYWhNKYTX9InbzGojshs/SxonvIg3vNeUAqaSUUQwF23Cw2B0qnzNAgMttHV48MWiPdo/6sCYc5jVrh7efqTc+SsfXXrzm3ZkffZMJBHBWHsv1FZRsx0IMb90SZjOBtWtk0eTaRqkIXAM8C9GTq6ciPZER7qrHSbTyo+89p9cuGb0Fws3VN/q72yNmFoGwch7lJh7BcoUCyxP42SOUiEmPph4TwD+F2k9GJj+eJyGWKja2NvqR4WNMCXxC5niT1nGe7jxl2SqBSVfC63hZ9Zvcl8d7DOH7XQ2CKnJlFOzZhBLpwQMpY0ITLE8/xk13JH66t3HRvlnPNNRinmlw/jA4rvxjrbBtF7BqhpulGmhye3NJAGvaJeoLpzemTD4fgd1Y50wqWt+VAwbmhERC9IvS7RGnMkjU0Uw5IsDw9niUNnN5XYThDFY8ylF/HGxViImPzvneFuq/S+NfPbA86N5HoV8tCMdJgAlRVBj839B6kSNtvd9zglcuat1LEylo3ZgJn8JFi/eSEPlEGR4NinZELvn+tPlX57Yg88t7VYLdjpvGWpNKWdUfHAcFU/X2y6dviCYOE6YDXQNEf2CIT6Safd5+VlCHusO2J7Vjn00KsBjgekZkvIo1OBAqgKzh3+m3OE/378hT5VL96XLmNLFeNOKrpiq4QCWsqoy6ND31OpX+u4Thbm69OboyQcywIdGD9Rqz6clyH2K22aewwdv/V2csN0Lem5lUFOO1Q8DYY+pe2OxagolGPA2aLasufLKFqwSZheIKr9YzfGT/Zt6J8pWaCXHpqZMQSFEwyJW/EECjow3ZXMWrCIn8M8bhB9r6wLDYMKK1Zg0KLelQ8oCmZLVBXs8ongjn0ltvb2+c8xe3zmSg1kXIb2AT58qMiOB6pzVZFphIqnCcpmVX1jabT+xuEc/0ZvMSGk/l9rQ1qRUhCZqP2dzseSp40ME82RyE+15hxm+els6/KVc+WM+4FlRlqWScF0nYMyb9MDjACQy/J/QlEWthVxNqqL9o9Nfs7uSNfdIfy8VbBJFgTQR+0DWBe1LRiis4ZHTYRA0FTKRTu0OoPuV4seo7tlZi966IZhXRkaMx/ozWPOtLd+zWWSHuKnd25GAX+sCqRKqcI6kW4wdBW1Gwfi+Mzz0SeKCWJ+CK07coeKa6tGV15iDo2s6t04/rO7LnzdggxFJFowllfXlulVQ/WVbOeXyq+9n0M95KaAQeoDyugw6P1x0Rwo8mk1HbQ7Q7gIIX+JsR+cvaLentWyv6y4kCpwOQ7oRPVyoRMUQGohymE0K9qDq66vz1UcX9vGXV3amfa/TCVPSZOIqUkQuaHLnhRhk5WqJZlxHV8XebB07kmGXwA9UrF9k0D+V9WAUcGiksTMLaJqgrCjgswD9fQJP6Oh7eEzokbmtdci8afKpwUdW7uz94fKrzIujqURTIMcUJIFcOk2V19oypbU/H/efSYB/SNeY2LfO+0iIYxfhT67swChk5327IW4x8CZDvL3vjERr5cDrZBC0FEZQEYzkQNFW/cSQN6turnxudH14eu1VrdXhtcn27pN8W/cZrZi4CIlkKcRxk7EKq2NjFrdSKMnN/b2GBBffKA8rU16NvM5fKiaGBB5OJ2WbEaJSnY1GUDcg1jFHc31n0d8yecjMZf10vWptvOtCgYIa06HodEt3k2Nl2/3V0m77yRN71YujiTShkOxMh8h1sBW3gg06o3Ncuk5/1m12iKjYpofVVUmPpkwhk8yS5Q+gnyJAWt39kYYvTxTAdS0bF0hzj88a+C9M0uABozxVMG7Nt93xwTRAhiqaUe00K1d7U9Va4TLikLMYzbiOSIMa5oTaYAhIP4PbLkihmntIY7/M8xNYC693Pbg292MKaFdBsWMlEa1xQUq3vOrqAXX1kCvOqudGN/nnenfQoeKqvCx3p3m26O+decjuTE/oJTsX71/DC3vjodOJjacrVKtBkN+8+YdhQ6mCHnnTPlRODBWF4WRSdjhAbfaDxookTpv0PaqCCcxhOJ+t2dlk0JJn1zYldAjo+1S2sILAzzXsyxNNR7eVBmRMGkrMnCaeT5TfOfRm79fW5uc/s7Q7eWxt3gx8Ij2ZqKurmG5xbEKdbye1VeXHeJyyECrWIVG+3JX0ql3pwLRgcwela2Q6Wt8ZjhbIP7yO7U95Mnh06HBf9yWUIbI7X9IIf7AWOq9dsNMzB+324nC1zR+stuulMGGYTFeSwrs62oqvsjqyQvcykphXW/dsF2fojQA+E1mp5zLeXDvm41bU55PAuLHvkjvFW4xLiCgT/3MuWUVHj9izKo4Wu91TgzvCs8ObzMBOZQhKw6yFvd0nq335SzTwHeU45hLE8f406sV2ipyuUPc0TSDOsKGhSUuIUg180j5UTAz3EY+6umpVkhGNSlWHnG0lkYGXVWBPlJk9ZtvFS1VKTw9mtHRzaxnrd2X9p2aT4ZMgfNWx+gbV9fzLTbhucRLllM06SyhMZdpd+1xv6saPHN931yPr2+/tKHvHrnyYaxXAAi6ycpLKQbRlZ7p4qrmPKuatYCd1We5J+37ODDOlOBv6hFxN7o34j4GTZhP3KuKfXg17fs0hWT9UMXR/F147cVAwI7vuWw/+yfr9L3x9dONMwWky5CwtQipohMqppElVJtOZzzoJioVUFQsD70vHWZCqLHWGIqjII2N8mA1//Jx6In59Irwlhj1PD3RZkIl27wxMUxJRR5BSD9ERzh5xtVBts08Pbg3P9m7Wq3Z7S0hm2vTIcwfddMXd0n6KZ9PVfL2aoragKuC+Y/Nxy+rE6UPcrFDC8f7pJnG69T00lNmEoPs+ax0rJ4o92XqZ65BLyBK52dpLFtStusweLCbcgVFXLbu868JcKuEzMw52tPvEW+ae/9O3zz/3kBTMgqMSnc1ui0ntEbBI4Octq8+PvMmndXVnR1fvScAPeCZhg8rRCRwio1CltKlUchzRybYptlER7DZdlHuyHk2oqh1ApvRE4nFJPiwyIFjgV2aDylh03rvA1/35Ck99WTbp/SPC18reOL937Klq76f2l7tumU/W2i0qZcU3OFO9lRUeAlfku7uGMqPKY30f+oXPfOBEGeCUAimOFKA7WeOTfC7+k5inSA5W53UaCHxdgP4+Af8zEnS85ESVfuA71f7BTfabvTvU4uiqloM2Sg8p1yVsTW9313decNe3DmgOJGknQf0VQN8KUI+fuR5wssseM14N4L3nHNn4Q7KpKZhl25ItsriqtVZNJmXmA4W+S8tDRbt6sZykJdvKwJy2lYsuqWP1YMnJrwevP1sG0zujtvv8IlpSKuIyU+ELivgxD/whM34OCD8EqDlEj0Q1bITxHFHsxGtBnKpQ7EnX7W4zSFNlMxfEp2Fk5DmpAQlfInXroctrYcIuh+msjx37+mr7j3ikzzCwLFd+sdjecBa5T+D/ek268P2a/O2nc4vGfPCyUaq5XJmWVsUhjeHqyOfBIVOqwTFiDM/Eit+iKvoIWD11ticSswKCw3XOzzcPoHs0+X1prUy+Ckn1fO/m6vH+nXRkdG1ecSuBHqnU9MVgxMn1NkWK9d5EsuCX0ZpYGe0uB76VVNADAv8+iJ7eUjea1bubSEwtbwAaY9x0K+EmDDXK63Vr0hWdlQa+WrQt9fRwJhyr2mlgSmV7NEryahiB8H7D/D7H6gkVI//LY9034X+v2ccPAOpLDPWLAN1RMxNoAy6oYkIDfkYXEsXxNtNvG3gjCL0mCiUlbuA7tseTvMJTvBJmeDlMqV6YoAFPOIfJTFP4yZTKj6TkJLJj2RxD3Z9X8Ob9CdlvBNDtfJJocIbYeombjqH2tVOmOG5ItkC2PmRxaRtmJIHIqzfMHm69Kh0kz5zNSokzPTu7DrO9QFKd+X01qh+fwc0Af19HD1PJKR4a7Rk+McbzR88AACAASURBVLgDBwc3ZT03kUKXKk3XpcBIvsqyDRWsD6YQulfJ+7EDR1WHS2SZlFU40AsTavj5XWbZhS2AI/NcMU07zPCeeTP8QU+0kQ7mDQCRtkTFBfFtU4x4+IViW/XE0FRD7/PCqwlJGmbaR6xIVjQD/yeA3+K6/OnbIQsAfq9A50hA65+1sf5meaQV5yhZaCOV3ZutlfvSFdPR1oxCzitholwPE2EdE2HZz/KSn+F1ntIDtFPHRgkHy5APWimrYYWEuZMQXh+YJLIZqKhOG3O95KE+DOD+cXR86uSe3HZFwS17lSm0r54iO9FR/nDh+72CNVmi1lqetNeTmcmF7F4V6ENB8ZZHckjurdTTeHDlPgSbbKFwCe6e/jrm06W7GfSWxWobP92/qXxmcHu66uZTmKCMHrBGVcJ6z5YDVz7A+vhh5X3iqiQ9cWJHNZFmrjPTy5VyQ8P6E0NuHXrB7tpyGo1nyns+eU1C2S4iVBo8ImLJsSnBGjSFRIqb6nN4WHI4QuDiilPXC2276Kb84WqmNQhpPklrflYvu4R8VKcAkon+V01Htivbsv9MqRjm4z1sW3XI/8Ukjr6jRWtqVvNgPinKCcNqFfO0v5rxC34uLIdprPG0GqKd2GDURhqLJABzserDgK2uHZW42wbQu2vsCV/EqU6fmMTPSyMxAq6KLA0Vxn5UjamK+8vKM8hZUkmplaT3RynIzVa5M4sBySJlnVGaGqsFuX9jUHzXmBe1lUSOMZstu8bIlhigkhU7fdfzxXWdpwZ36sVqd+YCscaoEh4r2Yq5EvK1VEtJsYWEtzEjpWMgmDJ8kaBaartOa4B2Xhz1VfKHLqiVs43JGOJbR5y88bB0mgUHQ8y6Xn3WKC50ZLEqyqgqOmogrADTD62iF3K/4KayVd/NK9aJ1KME6pQVSmfQywihB6j/C6DvhDJFiUdzUfLQKnb+C8fazNPC28goPo5deLKaNcf8HPW5QxWnJrCShyYohpJoTsiuktMbW50gETlS55GkiHmt6JPdA+I7FfiL1JSiu6aOj8BLWoUHWSCXoPIQ1MgxqRAUeaLSssms0sEF1fNeJb5QRH0eGSkKHlJnYshsCimoCg46aK/5lUHhfuK4pZ/BS5FUkRMLEDKELWoJZXxfW7vnvoIm33RktMuMqklLYeQS3/fKltLzWgdZN8ymSePp6Mhp2rhCnZIJuujlerA06ZOdi49BhW/C6bPGAWJ57vNQr5aq1EpSYzFaijlDF3McjKSlR7qrHfXcpD1YXTM87HZXRLY1odbUhOrTnFmP3JNh6GRrPJMxkWuh/wGF8O8D1HA8wO+EUAT60i+t4Kp/06fdV3mf39QLHTcMGRw0GQpaFCgTGJLchq+BDXZRDS5o8dVJNxU0UrIlsTlLLvMODtStgulHZ59JIlv57NB79aGRNd9T+eR+H5SrkBhHygRodk5ZUVEasdJ9sOkFows/6arox6aJIdgWCscotXf1CYOMe5uWiodOf3RCkxlUHew/eoeYoy2XFzLzRsC8ErYi449X2hcskRF7lUZFoubUN32WjIcEktqRDwbDlc5Rrf0HTV6dk4ssynOzRmiNk6bc5Pc8VKLZJdKO2MC649X29MnizvLJ8jYqud0xeq2zXZ+wu8yJYrtZpK7qm5xGWYWMy9D+bKpGv5GgWh473+GS6CkXJrRBrfcNNu9RovW5FZ5+nwvqf0tQTQkt1kR466Ty8EaOfdM0xAbzwYLMCNAJix/NyjnWlWfqWm9eYb1+xcJw8kviELUSix0T6zGx7IJ6YrHsfq3v8zcQoUNCsAgEVQXhzLi053Qy8lOmYqVkBUt8KVlTVRdbMVHGLMiKrhLnk1j8QfQWOYtPFumpc01QYmIGS0LBOUMTQpLMhmBeCe9y7azQJFKp/hWrXE/FhWViIyNBe4Sgnhuttz/VMf6cTdDMuCstNiKnOqvdphHaaiBDLl+0N9nHBveaQ/bqlMilabKaSp7siNujj/vt1ZTtuTm94nckJ7BNLR9pq+F/yFE+q8luBO8CE8pyMNhkVa+ARKovMgywQ8qqRJHiBia2IMPwAzmFtxPwQH2vJ5VpKxEcTSvLlctHAzu1bEOeeGDae218AEfoIZhbA6vbtPJfkss4r3FsbbpBYbny0J9TwLu1C9emQx/Snqv00OukCBnVvZ2VuGwh3RTsNKu9YY3kXptS/me8v0Yxf48koZ0+9VirSOhTclOEzcmvOA6huVj/DsX21ZFQEGFepTcYjhcjcUgYkQpfDoEW1hemzvlhucEbsLFipXixEpI7p6j8ottWPF7e7Z4ub8+GdjpP9cBnesXFdK+S7bciB5Muh9l02c/TQbfb7TOHP7UvOfyxlKZiYniDv4M6LpJErJjBztkhlgsWjQqJnIWHaTxDb0OC4UluTyxeD0sEfp/kxxh03VaKNE5QJ8rJy/WqdnVssJ3Xi0khq3hCcCDWinxOHPlRc0S4KbrcFAMVUFkXZIuHoBif6oyKz6U9f60ZcKKlFolYS5mxhDcbIR+dqkybFEUulTutY6mxcU463gno/PwZk+eByUI1RewnJRCol4c3lhpXU0SrTp7pQYxTgI0LAm+IpWvxfw3h3HWBaBRqT4i2IyBXA+m67yvOy8fLV7jHR6/UR91VbSAkbb2CVJc+SLEoSLAXEvKVQiAtJCAysCE58Ly9+vcP2H29rTCKBgiMJnP3eoU3zX/gQm7nDJGKVoUMJ+imZnvrIkM/bnunC4M+05y0ee1Wey5FHpNlRb5aLabKI/0d1C/bHSJuK7hS6GZKvA7AkxIUgTMQ9kmTDyo5nqwoSqWLGkNmxmq65h/KVtyPQKETpDNBRC7PGNjWwnVlviiWl88Zc0PN/sBvnemcK2ROnXFdp+nmluM7tdbKKjmKhsnHKZOcFMXWDarJJJyujGeRrzPTo3T+FI84hJzWcPwIGtYed7uLJ4q7/bPFrdkodLJUjZT4UVKvFeCdl30YRCe3R0Tn1kQfnr5Vcvb5KuTn1f3/vPgevP/m34RgX0fK2YuisRzk27GiOjhBt27YvrrSeMuHM2r6G9zfpJeicLPFJdoymMoTg7nyWH9HMrJ5liqrjewwQtlkLR5PIpuhuLMCoGgXZnTpt6mS10SJ9CggW5JGK3XCR1n+QkjoYSi8mRWdCp5fgET+XfMxr5R0fXkXA39ENd62IbIDKOZTtvBIN3L0rrbVdznNqBQ5awJXWqJChlMkEaTcnZHdTMirqu6pQmPW4WlP8QBqqMReSONPQ8Q8bVZD33ftt4pXlI8Xr1Qn/I62Rki7erXpIivRj/YssDw4BU49Fqm5oVUCP5RQNYiU2vM8QU0D/MPnfx7b0lX88t7fw6Fq23nPhZPvmdJ9vMS3o1BZbOhwUs55s58E8FNjhYoVLZJ3NAIM69FCb5tb6M/nlk2ampLqkw2is6yhYVgpK+XKZANoEGAGfjqt/B4mPCfPWNu6yl90E9G3oSfY0KfBeD0YF88ibJQqjrV+1Dcp5tsbNsZJWrlEUJIU3zQdxJhSwBvAmEodScv7FqyO5fFOBVtpuErDW8OlJdZOB9nHVVBs5H5VIOnbg03G6K+as/0uqCOxKSnj/eV1a/uL29Qz1e3twrdUpoc6p0Gc4KZ4gJmC57pY8mwE8P0APVhTbc9bOR0n7N8ffg9IEpHe4Bf2fjCW7ZxNREXlqP9fX/4ZKUYXyt4FfMeGvNi8Xl83tHDSYCyMqnx0bLDdLQ1n8hCQ5aaMmcCIcyolcxmUdYEGfqgshbTith75VFm/nXhTEp0An6noSzU9eRwYj4gxHfuolyqNYu1umpB8bXP5PLZwwZjwWh+bhIx9JdYqdhgRb4pM4hHaiGCjc+BgtQpWB2cN2VJD+9pRVKw5I6lA58h5WrjQ4Zsnh7fRgeH1YZXnlNKUdMxqDK+pqW5rVr6vPYVgzhJvctMu55mNJ3wB0knWIzX4T5dfh1+9/n3Q5Tas+u7mlEZUpAk9xLZkHb9y8Kfxp6tvRBKrRi4qFyjOlVSUjFJTtTV5u150i6PrO2itnGgpjTRv2di7RTJpcOxo5Jwa+oA1S6pvcx2oSlsJCT4VCJOBaPbkNCKSZjbvF8T4kqxsrvsvJZeJmGQNR23H6Qp1mkgl93sAXIdNdOdYAabj8xKvLFZ2aC/nOlLIAoJoVCB4ryQ1EFyloCrNmdX4IquzI/VbiXlycAsKNzWldFG1qOwbQiuAdNgIQ2LeQKxTrM8/Q1nqpJ+8fRHq4k8AyFWFJTuJN3zt3+GNU9/Ev77md/FiuT1aR7no7mQZ//bYe/D46Bo8PrwmdhdRl3AOLwGHDLlVDtReLqaLY/3tahC6bd3ylBgh58JyxT4q0rplGlilRt4Iax9BmEecW0UVd9OglM4RwvTmylWv6n/ULll8Lmtxu1D4cTBmKZwW3V287Gn6Mew/B0tjd/Oes26z8cmpcdqIFdWMpLh1ph6cOeUjxCVJ2Jb/i1GOiwrHTckpUr1mpO2ddTRkpUZax/4sSfNgpOQoMIn+NtvdpqZ4QRjiJmL0y0rSBpcgPW7hS8Xt+Gp1M5LE4Z/v/n0cKrdhV7qM9x3/fvzh0hsjw1KU6VJZCuLQOjari8Xc7uPD7WmJNE1TqfNwnvpsqWe96jvCSBIlIY2YUQTOpDevFM2zqWzwXDpKsyRRSp1aGSCZz0RA67B5zX2DiR5Sgd8hrcOl5q4pedP1dF7ULQhz9Ucbn+YM5LyxYm86F58NJ32y6NCPMedQl+GwrxnZWsd0FA7knh4xxcX5Fiahqm6HBSXdQdo28FCo1qaOTkxdOCpgC+u65kZFO1Xjn9IwIM6x0yO/qqozQ4QLER33hEEsZPz1Z35CoiT8yg2/hX914Gfx747/AFKykd1QhAsrF9pKiMLyoOoOlotpVCE1uS8KvV466vsAqfwsRIlCGtFrpUjaHkUZ/xWzeSGxRUXya5MmQm0+c8LSUyAC6ff5wRDo9aR5UnkMayCeZF5NjWxesLVNmkj1mrMolFindzedcc4Uru0Rx5Yude9J8kHKE6UIxqFuae2YSDZ/UbEPJqy+kVykiTCbi46JoAOjXXkuCFRoUh2pp/aaOWhSIeIiFPsqastOD51PV2yeL5eVLnwZLvlM3JMi+NUHnn4T/tPed+DY/G5Yq5oa/8u8NnEVKkilBbf7qyMauEBDl1AVEo7pCCXsu5Pw9elfF/cGpYS2WBUWwcdFfcpblFFQqdnMePME+jI0HQ0GkxxrCkjahhXaM7P3CTFnp0fN55BOo1SPNj3MN8v1TZHDltcKWgyBCqaypRxxU7YyF1JKtED9ddpHPid5WFHcAQFf1N5fNN3INFASN/xe8bjFUuVCbEgUSpbOA6kiqsgng+CTXuXTVReylQrpqkWyZpH0XeoTSsvc4OJ85a1FuYDlogtbOih3pU5SImVKBz2sQJVPJXxlaQ+RNETWzfDxOaZXSh8kcWdLl53C3GUBSFMY0jVh5aQcBKmPEsJVYOmo5/o+eAq2LMjzulHZHCmV84W1+ZVt7d3E/OlYcdKAoE1T2e9pnPZTRZRFHJpE+2xki8mjK8GMKl7bMYPVHdPKtUxqKqeUj5aSmqjyCyB6wuuLP0twzCmvAZ3Y9C2kCqStIuMIS6210k4u9brZSpGmK47TFQsz9KmqYg5FybKNtEdFqbKX3o9+bBRiXKkJ80eXkQ5LDFt5ZGaJ9bssZSV0wNySvUtaB9U9fTaVMpzl2oxxmXGTkxR9qpsv8uYBRSqVl2TtGZDJGhD+BNb+AHt7XTRtVZXAVV3dmiLqdBqreP6ba/yfV6gQbjfeP7Rp2Nc0LZbapw5cCowFiaWqtTYsJhZWdWt91JJNbs4uuLQoq5Wdc0XZzjNtnTFx8bKwQ/4IHCuRLloMrUpYglHN1hJqdUhcqimkyrXXhn7b/pVkYmHYin0CY3KRI4eoJrloDglQKSXU0Bnmup3vpQyEY3kLR/Mot+WNxtxSD7edOIIDV83j8M6Zur3QpTfsnpVUCOtNCdKtyoiBBiisK5R9RL+JI91QdIkhmWKvAo9OR6iFyiJuZBarlce/IMAWT3Nv9XF4f01s7O8ckcm8TjodUiblc8QyjRLJ5RyFIN5HTsyvb86BWWrW4F1Ne+iN+2JpX5sYVsGX3RO9auLomjJlkQWjTcgTGOvV9JFlSgdltbJ7bjiYmWhVhpKksAeI+RHQpZ2LJgolI+6Im8IEY1OjQhWqqaN9t/3A+lR7aRT7intpApMQ2Oh4C1Qfd1JUoMSGmPDezsAUxYb0Fy86buB8SumLPMwyM7hp/zGETOOl3TN1Z+xLuL4KYYc0ETnZEKzOZkWlIRUhW1aqviuhLTJb5TkYF7QJ7BLvYWxA6l3WKewgtb5/+kgEQFxvh/hSm089oMhw/BCUeh2kV7sxlenMWJ13M5ZuVWdxzLnOcHkZCwla5L1WzDkTvY2YX8dEH26iuu/f3HU5xC3OOF3acuLEaphY7KWq8mmQudUxCyspGDLWpZ2Vvk4KW6zuKmh9fkrilb9QPrx0qZ326y0vIJeVa2OXaS5mj/er7S+uJa1+1aq6Bi6ra7mi6ZDEoo/0ncISWRtzQtGj26bqm7skhapzUlvLKEtw21NHYBXh8K6ZGj254BuOoIqUwF0LRdNho2JPekJLcVBUI5dKRZ+0IXXBtSqnExd8XjrbKl2eWedalaXMeiMQoPFhqD2vnz5iucazu1tY7raQhs19frxUKH0cgf8e+2qbTnOvsi7Fnmb+rMok/XKs8l5gR1ZB9gKMyeN7mGIi88ONM/7mcXMtn2ixTlU2KMrJoyvcWpXiWk5snmz0px9beZcYkNI6LarOthcWkBTuyeM37PkTb3hF20tCgBC3sZApuFwHXfpy/tB6NXd4NUmqkJedBN5IL1veAIGbqRRlqioiObU7aX6+rz4i/tSWzeeScWooDSFud2dTEXnbqJXgjicPR2JuSHREtS9ERFF7razV62TXCapkXCiTKpAJwWeVrdqlyzLnq1bpqFVWifgRaSXVfSE1ISjlOTEhZHXvO+GCkCRsh0GA3DPIeXLyp4e3I+Fpnz66ExzCF0H0CpVNpLLl1b37T7lA3FYlEUvMlfE+aOH3MufRIzgZDKoGDZ+IR5ww5uK40giHV+3lfjl5fIWy9aITjNYubVzlTYtwvJEKDFTlKbKy4qmF1W/aVvacy8wlB0PGG0Uu05wN3WjbgRU3e6QXT4IqWwlFf2OTnzFWJqdUJXTh2Njs5LX2geg1rNTvXSj6KJMnRv1cyrTxAKS2LUtw9fPH0QkBarK18YDOBSrIFnliqn3z8lT7KoH/O6OyzEqnci9tRjylNrLnMkl9myAQAvJx9Y8EGkIhET8q0BhgiYyC5a3OkxGcbrIImOh7FAYb5Q2NiLf+B6o19VaVTdwtRl0M10nSn4CBLGQUsUqyzSnlfVtSj01Iv1nEQ3h1PC6EcasXpcm0sCBsZ2HNTh1blcgts1JvbdRWDIKYD8X4mxWhaKXHlAt/Pv/C0ZXLAWiMSxS3V0a8/eCan14ctrym1GY6biu0KevcNMAsKqUqWx8QmJ1iI6QqWuF2aJqPWfGtRsUnkVqRfFRTTsJFUDhdomNXuRBq5112v+wcdFavGTtX+w/sWBteJ8plXGjHThWBtSNKgo6tx8hqguAkvIltwk2GdcNXouZMI2CZalrHKSINDHb1CatZwMGpcDrXiJUyXzPpxDeVNnfHzNl485Hm+CFUWrY3jsu4xXXRgOKtISoBHu8EcKM32lSZYWVd0Tq+6tqLvdSBkrKbB/GXtgxi6qhSOmaIxFDLk/qWMfTFRJO75LBHFGpqcbgwd3B1z8R62XZaG1Gmmn64afTjba6xTDjVMo2flzift4HwTjB+V5jYZ7xD2PiV3zBgZ3lYFySutKgEbiZgwpgtrVRNhw27ifF27f2MWBlrlBl/b4iHStUcpqYR3ckKOt4CljpZ/Xp8q7NjKO5VAdSaQDKRw5zmHxGUUyb9HBhvDxx2iw1S3pcqBG+8WOt6a5PqiAt4PolNTOITzXMLa4vbXjxRmWEx4ZK4WY+48IHGTbFOGyQzhyTRzmjx0Hmafeg5ok8BfMRs8ZGLEbP9xZUX8mG1xyXaSKg+5qCi2WZU3cKytIC1zLkWgzB+trSpRV/dX3AnCD/FjE/EM+w2Jqh5jyQIra/zSJepULILjLlrhQ9bFmIoRSZR+oc9+C6r6+8/NdDnzdv51pzc8bt5w+ezTYJ2a69VSG9ZF2ZyDmYLx5Y5/CWD/xaIf8j4ELRzjpjl9LNUSCUxG3G+exdWptHiAvBEb9S/8dmjxXXPHE11YDOcyJTXQnJqmpuf/ohj64ZQ6Va6ls5326adEln35DFSf7aodakvS50AkxXuRZ+Y+8VPiFmeTdeTQ1cCoSiV8vbkKZsnq4ol/KxXuMA0zhClIPU6VvzetPL/t4opnNMHyJelSKcLxxLvEMPV06dPA/s00U9qpeaaNoQ0RqTjfzZl/3mrh7/FdzVb3ZZ1/WORg7/qZNkWvyR1RIXwReP9u1SIZZC1nxS5TBf2XGK3jyQJnUFR7DtwHJm1871tXd5+okdTi72kMib1hrZuvhWdQza+X2hyvp3vnILO9KPMvH+Stz4y7GLEsKJnxV8a08/H276slL4iP1JKVaTSIMcNqZPnGaiYLQ5SQBaMTChzpUAjH1iwqL+rA39F+fBXEmVtHuTlHh+/lZwlYzLjA/2jgv29UhZlNI0S6bKikPVJabnntqq92zC2PufIbXNjwozjx1SIrQDPOprEBeRWeuJtGSmJvn2RQniUgNdwff7Lhd+r+B65Ye1dcdVLi27H8bX2qJ2a1Zm273WyYt/BlaI9rLIq0TpG6DhzDyMSz4NT1y9QLdBTppt+lAKXF3Pq09nEVKl5ymla8ETbVXMMj42kPfS8RMGB2ykHYzi43Ici9Z514Mww607litmyrPLgzUI7x4HJCTktcZgGvlkH/h/A4QUQHbwC6b3zyiZGjdyDrs+h4Z+SYCGE4NZZJetE0q9tOCf0X8eh72PT0rRDJJ1RPPNZI0ZmYsFdU2/0o16rF842ntoJ5qhM+iwYk3SoC0Sfd6ReEykdoa45CudZcKJMVYQAqNp1dNltX1jNpH2ZWDapAFuanUikfeZVh5aL1qjKpXuBj475adeRV1KvoKpXPOS9/5Rup/XKukwx2odHtMeXFOE97DHQjsOkKzFlbdlynlvOVonnRJDitnO+61xIHEtVK2XBJ3NFReKffHrvLnpucqrVcg5pkMN+8E5xXgPwv17Mka1XQGRb/lED/GNJtwyJ0BNQmKEmOBSvsNa/LvhgqlA+UQZ/1CIpmdIE0LmWct36aMpwEsmQOTYSIQaFF0/Mtb/Zm8jOCtLEFM2paMsZwoTh0OgHPZF0/N0l6iQd/RLPSGPhwckvHl9DFFX8Jpsou+P4WrXn8FKigs+KvO4Nl5VOlC1dno25wXLvIbFURV6lZ1cqRbTChIdDYftcucvzxhsRPv5Ls+vFQ9tWR+/hwDznqv4+N2xPeDspTmPiw/jkX9nvO7FaTNarkAKUyies5aNJ7lbyzFtFabc+m1NWm2naKwrN4te/Q0olqMu7PPBPe0Q3FLVf5bvM7pYQ3Gucw23WtXcHCYC4dT1QvQD4/TaoBceSQhIcSklL0uRkyyFuWqGLG/ZFp9Q3J9fPfl62kYlp50g6ObQ9u94FKh8m4GNWq59ZzLMwNMpXRknrocg2E1ch5jZ9iBZMlKJKjZ9aGxZ7Di/pvLDZqJXGZ11XydRKpYJOVqc74o8Vew8tlZ1BlTkDbQUMPgXYjD6lUGs+FY82u0LnzJtrj6454/jh3Sf6T3fJ3bwXI92FT5xSRqh3Tm9ieBOZsCmyk6UggzzeavmlPGtOBTlFzcVa/MOGXvFvgEgn/bbsgNIr3gM/VgD/pCC6qQDxBLi61/vy1ZXF3d7rHSFkFWBWZBK0SuYTtOZa8Nd4Xb5Qef9siXDcUWJBaUrCWgx1wVjtYxXE+BSBD5pzZCW04wgXJCFEq7OVyOTnNhy+98TapzvW/Z0jnRwLrWx0opXSYp6ptSxJSqMiDVsyp2VC5JOUW0VZ7Tt4Qk2uDbIqM6rulbaJ8UA1WCyEldXpTgug0d5DS0VnUGRBkQmntpwbEfAFRkPxvUK+rdm1OpIRPWJy/NF8sP9cg1vrMGyhzkr7GvsrUpxjlfLHOjkv5pmJh1iGky23mluVFfczzSnov9Z0jt2y59HFSjMOHYDrLPAzA6KfK4jmZ5ndq6tq9Brvcaf3Zi6EtCTSi1Q3CAgNJ2Kl1ng9o9Gab+lwY6bciw7lsyUXxywnI9ZpgqCb0ya+yoRHWsW5cxLBBdy52EMnRBLeWd8n26phfnqqsI/sGBT3VVq3+4m2q3nil1pZudRKcCJNsdjKk6XJtqxVt+PYauiuj2Sb0y7V0efZHPSM/S+xamll9ep0q8U0W+45vFRMrld5lWrjxsg54zki6TF+zmP1LlpMgzusasLnM/LHK6gd45NIziYNlsyJs7DaFEvtlltOE2Vc4FRpyjiMi6/GV5B1/o6GYiHlwn8QcSrg3Ae7neP7JWOzRpjoMr91SPQPCqL7twWv3+DD4DXWhTutS6eYkxGglkWRmuMPNvPo6u52sZcSpVqpaQPzChS2Wy71voEQFtTsdMmtbsVUGfL/CTg/Yd839x1Z/ud3cr81TPR/Iai7BIfKvdNX9RyuWR96p1ToJ9ovTrb9seVsNFpZK/Ol9VaVpnqQt4PTRrNGJMbp4GmzYsn3N5ZKr0/meVDzo6teWhpOrhcdOcTSa1Uy42MEfOUC0JKLEv2unW+FHFGYw69k8G0fjy+jc2jUBvxaBhirdTLaprXf6Z00Q3Kr2vBKYlSlVKz+Vw0E3UzkHNXHyb6x4T4P4jH4J01h7bTItqoobh2t0kqJqYxI3pQ4IsHD9lREPzgi/CNH9HM7ZA1D7AAAFXBJREFUA9/1Rmv5PdYNHygrdVMIwhlK+0RqQEI2rTfi09ubSlSrSUu1uSu8K0Zu5PtVTy0ODpB1SzSV53mSpIkN9CUG/z+GsFCXiZz9JZPZ6iZIW8mFECJsIDin6AGvaNorFbtxBSHOMutc6WTeBdrzwiG768ln0+n1ftax1ndHI9suS6HUeMmaeOk7lRhZ3BS3tXorlNKlWNU+aqW6yNMQ2ROFTYlpKWh6HxR9c+O8myv0MrrxkBSw4qH+SAoKaVNHlpPzzA2eKfMjbqIKlTbGKJXd3R+q+0cD9VyW2W922v6pdl4dzFK9mEZfwEgVZVcSsTVwOkkEOab1ZgAPMPB16fzWWKwjTVHhsDlkChFBBuYDMO+AayvgtmVFtyWg26/3ft/t3uM+5+xtzvuOAPHM6QoRDZVq+qtvXZmqIiJNPoRQlXZUjexQ4rNs4Eo+Xo5aA9/vzLbW0t1Z6/9v71pj5DrP8vt+l3PmzOzsxXZs5147sZM0Ta1cmtAEtYoi4Af9WUCIIoTUf0iVUEAoUgCpqkCVGkAtPypEJcRFtEGigCCtGkJC26R1QoMJdh3Hduwkrtf2+rKXmTmX7/Ki9ztndsfjmd3xetYxqV9ptd6Z8ZkzZ57zXd73eZ9nqUbyLzoOj44yN5D0EGGtqjKMtFw8jhR0yT8T1vQCWZUWWOdMKeXl+XkDp+dqZFzMFrSbllpuprXovZCUq8h1kth2opjaSYKdOJJGayy0xlxrTidI6Yl1Q+TiZD1591Y0t54476cW0v9E8vuKSF8JYXFgqEkqiXnVcvrNSr7w8yt00vCOfCcYDO2M3IOqdRDEQoxYp4wpYol30b2dTrQrTd28UuZorWb3TdTtoXpNnooiMa8le6zJxHlslInQGQB4DMu26XnCUB87E7TKMSwYrfLEzMjEI83Mo5xpI90aEWy73RF81BXw8cK5Xc7bJhAaoJiB1K5KF2qI+x53l2PYQzmT2zTPTIdyw+4JFNUUq6ubvCAPhYeok7XdZNT5l4aMv+1IX0pIGRTkK+W3kYM/8zcrTvgtYeriEUYrcq1Olp86ZY0pGmKygcFT3XklXblOmrCpb2Qp9654JyXlWrk0jl2rVqNWvW47rHOstGDppQKFnNs8GVspl25/7+w3p+fbx2vZKB3elwkof/Fdx/vhvwWgRwDg0+VD7HQgSm2FYOyJ3KURlZRqrqiDa0nhZsP6lWSTd1OF0dsK4z7a7piTkbYHk8TubybmaJKo80qKc1pqLvgzsOougGvaA0wT4l0h9yIQasZBvZVByztoKxnAcZsjuN9a96i1cId3tulBFAjRGUBMMeyIhvrW8ogkyjJ3YVxuO6bjMtsRnvWTEXVN1hgExZJpW0cUxyxXZLPDmfVfFRrPTevRLr4QDlLhh0t3XBqMvf2h65roljD9xxGfZeZmTzmaX6qpSMvAYOFcGHOutO55Oye4UqE5/2eMn0gzt0kskpXa51rbTi12rbhG7XoStxo10Ulqh89vmvhfHplGqRtebqgBevOnAejPAeRuALkHke3iGUgiKl/freRVUREgJVEgIc9LyT8sxaaa1qm705Tu6GTmscUlczyJ3YFGUhxoNMyxOI5SKURHCBkRuZp3NiGKvJCl5kQ790zjEwLdbd67hwprP+4c7HBOTITFNsaneXpY7usbnI/AoBXJjFM0lozNi45NbZsKW8SAGLMOl2QHCqloybTdQtFiQqrWQrcA8K9ssfhDrXibMdrFJ1pXK+pJIPpnAHwQtZ5i0NtTc4U7d6EGSkao1UUL/ItSBULwThuKcnkgAjuVhRqKApKioKl22xopeFxTuVKtMzMzXzdSvb20aW3DofXEAECF5tFXEKMvI6gvAeBMdZmGDuTYv3tiNhkinAsjSwBXNO2c/thiy3+4nZrHopY9Wq/lBxoJHEwSORtpnSkJ7VA2FLFo56aRGn+b8/iQ88WD3uEdxqkmUdQRQsyK4MgZQvSdx8ofpYCkQOE8+SKzHZMWbSxcpol8xEIOGHSYKs4TedcxuU9dnlAwIZTfABRfM9l5q2pTgCoZiXYcdOODSA1dBk05zAwvolbHQck9bu6cd6fmWIc/wiQa7jExIJgfz4V+GxbmHgV5zqirJCuwTnRWm/z5c9MzKY6hzDIohswQwiKobwDgLgB6snQVqZ7pedXAYnrP477aqvPvXIhAaqt5kjvTzN+Zpe7BpSV7PKq5w43EHmzW6WCznlnrFh9aStUns6J2Hzm50/taRKQWEfEkS5yVWfiVlqtBZ8/2OJwXBHKFzfK0aLvMdZi/XeMFihAKu3YYGHZ6inLvfMu2atZboVF9BwD/jA18mJrEKc7QnL0GQBhIZnoT2KkZQKUvB1B8A5wAKX7g5hfutj+ZjcFwQajbvjwCkMNLyrINldqKrGTPALNOacWyreDxZS/0sdiMp39yUKzmit4GoGcQaJsj+E1TnjTTCZcrTJUwPpZ8lO7VW8mj94KPgWC5EUIQpBKF9l40nFcf63To4TSjd9utzvcuxNmCx/yTqak/ChQ1teQRSS0AQtbtRfXB/SDQQ1YK6aWwIe+2OXcvEJ21Jstsx6W2rawrAkWkOypd/E1AMOvquFQtmhaL+bwhMfoSIuznBTa/ulia7XLeVg10BZj4jsD5gc5lKmkjLpBzz7rTc49Tmt4VqotKrArKnqmP25CrmhgDSVgS0jpRIxAReaG1Q3UGUHxdOLcYj7a9WFesarMPpfPBH2gBDQ3wy6yKXHiwIUEbEoJV6oVbM/mCV5V2wEspE2KZhwShe8WEwgYgaxR5pr4utfH+cwvThfeSlKb/ipSLrco581BDARNCiJoQkZCSu7jL3r0wDZcTsiwFbr31NsuK1KSuLQqb17iuLngdOJQmXKqbt00bM5sdDEL9SC8uM+j5xsmXYKR9my2AshYAE+vcZXaNCPS01N4HS60fo1R3gVSrDExUaSKEadUiCNYi8p5dXYUijxF4qTHUvJmqE1Jk/ggAvhZM3DeAQtSNtQDFoDmxVYunbooRjadPLzpQhYdW5sm3XVAD4ASOIF7ZckMSuy4EBZJK3SPUs1bIViKQz8Mwx6rZ+Rnr3by1yH4nNQAtpYQFIkhN4bAwLspzWxfCNYSyk0q6CaWwIYSIUIpEoOadJ49+xtkitW2e3qjwWUTec1pDilVGlmCbgAJyl8OCWXrDevMFKdQ/XcLVw9F8kVEpsIstsNlJwCGEztUvtpsnxBdBq8cAYOvKEyWAquW+D351JC1JCR4VkdDOY4Q8EoGQKqgblkqHVSsAN1XQc0A0P6qc9HpjTUBVGea3pxX+vhYi3eLgMw6gbgELC4JzODbtXBB5x+SoE0KhYxDCsvgEoOJ+JwKhuUVUAid2yUHuybadKy5YR6mj2BGLoQqZKbG8sonBSceNBGyR771bAktzhoV00U1I5RpS0WQUuwkWU2falk1VwT/ORJ73PkLi2q7IGNzj2s78qHDm84T43FBq71pHIgdWbQKD0wB5Z30V8FK++N8A6FNI9PPVjUglRS20WPB0hl5q8iL2LEjH19aj8Fg2K8qqPZQVEHMMfd1BQedw6DQO3cAby05bE1Cwsio6hABPC4TzEuCzMdCEipTPCYq5bIGWOvNa6ziQP4DdVZWUILQBGQXnZ0SZgYoLln89b6xbsqaW+yCMhUqUt43v1sGwVPFQlesFU2GYumuJNcmBUufceeucLLI8ApPVocAJJFEXAmKpg11lmBbXXhRz+fZ5QnhGSPkiFFfGgQ3e68gL+PU1SZYH8ccA/KsE4nFCqUGoDjfoexkDYSTYWZZTK4CcxmHdbixYEC18FPItKGUruXSTQumK4YJjF4p3NhhLIUYCVE+8VxB9gV2lBMJvWEe7DGGTW/rR+4hMIcJNIEQpgemD8o8jlJZqzQ7UN/PwLJl33JRKNiQUjoLTIXPLOBUQVtYOyDMLpFIGoLJbCkEHuwwRpLG8z13uUt2hQi6SV5yIbMrIbIqw3RBSKRbWYcVbBiENLJrMV/oAXwag18dBq2HfHS/0qFLNQw/D9quE6hcJ9f3MdQjEYwyin0xsLIB8Ab5IMAhUBeDwhVbVjIgVkJi+wlvN/QD4r5zbutLPN0pcLqCgEmj4IwI8REC/BcyLBpEgT90qqlj/VgTuBmOFt9vxlPfxdB0wjmsIoh6pwL+znPwBEqzcZYisJQpJTUNkLHh2vCRbqr0FAxZL3qPLLPkU2NNLgY9k6F1TIZGT2lwsemsmlLIzUrtJVGHOjbjOzLKz5fnzr31BYaTU/j4/nkvJm12x/O91R1AyrX3PieQFQHEvBQkg6oA3PmQDAhtueS1VAScASPdZ+1bfLb5WOVqNiUK3eqwHUFDdRf9YibR+Nog1EOwomTVhh0MgVAYTmwuqbZIQN2KW4wLPHUMsKRBGHNLIabvl3qZy30JUVF8+WiJjSkkFa8hn1udgfE45WK4havYXLmW2GVLhnFTure7kxi5iUUwoVcyoKJ6SOuT7iWjWQ+AA/SkA7K26ea84kCzk0TZo13axPsI4DmnJm9dDwyx51tasrSxnoUcqOeRAhltDlQKvrw5ys9qoWC+goEL8GwT0FAF9i4A+h+QeASGmoD4joDajKJpiZTgNbETg8+VJZbkrj3qzVstdTbUwtZVXMBJVGxrbkTle7avYsq2T82QNudSQ0/yXdc47crEkh8Z7mXlbbxcW5q2FGa3nt6roQEOprwHxuW4AHZnKiWd8xXu/F0G8hqhuDu7C3TTBpbHacPgflUb7eAjjI8SVAKobzGn6FoD/MaD8BDS2/grUtzwMQk0D2Ri4o6+bn+r77L1E/t5ne17V5etzpkGzCr1WkU4qn1FPZXup5YQ4eXDkhCUfGW/ZpNIasouLJnvjVJH/Q0Oq5xuARy4vfT1qdKnPeGXTXU8IVG8D0stE/glE2Qysfuou9kdKYvCW+rsAMLRDZyNiHICqgt4BwL8hGb8KSu8BVzwBznwCAG8qqTA48L0GSiD0fOf9fFsfcu7lPCmqpIpClfBqlTDil7cI/JxG/XLbdp7PnHl90RVv0sq3Mebg8ga7z0TgfRbSIuMIzwt8si9kxbn7pIgeiNRUoWQcknuryCdSVcBPCOgAAHx3HUbhVxRjBNRyHAJyh4Ask8buqdTVWDv7I5WBz0RFEFjHrUzLfFEKLg/hn9xsyiKj7yDgfgT8kQDcHwl5kGR8Qoak5MYN92ycRC6BFtRBmzPL45ThpKNYvyg5hBWS/J/CtP5Qy+hmLRseoNZX3rokqLq2DKqTMEDQY6NjIwDVvRxzADRX3SW3VsJYd1a6Rvz3jVU2eEulcxStIthOlaYALy4XmZSGZVnoVGV/cYwAjhDRMQB6l6eHwjtoqjrEwbxygyrr3kGhNOy75S4oqLHsAGGlhFvnzkGS5+Hf6w0u8AqhjiPK46MLBb+/sYGAuijeq35eqt7zxurnhgpQk5VkcqNiiupqR2MrEGUVLbhd5Y/OVj8nKyWUS4b10EFMNFoNbo3gFVJisuV6JFQJ2E4Uw0u7HoEDN+2C2K5spHh0Ojs1CQ+9dRQm0qxkW2g1Vk2HazWuFqB6w/YArD+wj71b0Y9h6BZno4NBMJm14JUd90MnSpanTwZXK0rgze07YSpduqgXiXUNZjfNwH/fuQOanTQA7L5j5ezzQQfV+wGo1aI7tV0bJ8NgSluwd8ceeHXHnsCQ6F2PMagmQt3u0t1rUhRwamYaTm6eCSNUoRU8/OYRMGr9U+D/h1B127/5KZeVXU4k18+agoJb31g7Aq/xYDDxyPODHffD3p17Ag8rcZe2oA+7JmG7xcXwajL+yZZNsPeeXfAzB99aNljMlfrAXVH17O5Bdm64POvwhUmVhKcX5uHhLIN3Ua6vHH8NB2ujJ7aAjslBCQeR8JAYAy/f+QD88EN7QtOmuMLmf21dGLG+/5F7QrVtIs3h4UNHoB1H7wuognaC82NfR6gTE8MMeVbeit3zvihnAsSeOnMOtloL5gOwFuBPMGkLeLs2AV+98xcgMXllHI7hgl+oT4bfVwqmbrDWwdnJZvjrfLMZRipeuKfxukw/1x3cVXmhHsErO7dDPDbrkzKUGiLocNGLgOCMlEGt7ve2b4VnZk/D9AaR3K9W8Kh0QSt4esddATRtHUNWKyW3lvnzYxiZ+qMroMFT3jvbtgZQP3D4KBTcGlUJn23Ewr27Q+XfC0kEL+6+GZxASPV4l9EjH01WX0ImAJ68cSv8yam5IN3fLZ9QJcU87l75cQX1/DBrdF5r+OM7dkGBpXaS9lc1oVzyvsjBiRs2w+mZqXDteOF+7zvvwc6Tp8Co8XzR3Zvj2x++DbrqK8GvprIeG3dc9lkzQZlbpH57+w1VAXcTwK03L585r7ceXWjDr82eLRsLcHCVi8aUBxgk1orVeXIKnTUWNBD85Y7dsFBvsnUBPHnsMHxxx25gNp3coKTnKNE997wHPPt2fiiMjLfMnQsCY7zn7dU+xZEvXLld+Pe7b4FWrKtHqmP0jFhj/0z3/vqzYz9oS0p44vw8fGruQjj9hK17WX1N4EWgmh5i/8AgdBUo+ssmrtcBnHWBpIRptmOuHuN1XiYUNISGv942Dd9v1qBBF5sO8d25URd0HBHOLEhgK3ho316Yzg1E8Q3QdDGkERMM15qGCSJr4aVdN8N8El3Vm2ZDAIWhwIYwryT80ulz8HNnF+Art2+Htxq1ZQ8U/pC/c3x2gOoxQNM52FxYOBupAE7R89x2VmOp+qcOTCTw9zfeAL97/CR0KquOhvPwnc1T8NyW6QC0K9Xdfr/DC1nqPnmCx4+chhd2bx2xp66UWbzay48NAdTywXk455YpFMAKLP13SmeAX0sqJPzs/CL86uxZ+LubtsArU01IqoUsT7Wfe/cUTFkLbSHhK7ffCHXnIO05DgXvGNaqHEfR5doKI0XY6l/LsaGAWk9gBRwGGwtp9AIDw3QqqrZOHo2u7kL6eqwd11rpJYCHxUqnqvwI9T3XuMbv0J/22Niuv+vxUxfXAXU9xhrXAXU9xhrXAXU9xhrXAXU9xhqj7vL6qyajvG7Qa9d6/v2IcZ9Tr5DfoL+vdoz63Y0lRgFUfxkOB7Q1D2pIGwSmgV1Tfc/3V6uGPd77/LAL1ftcb8K9/zWrnfdq/3fQ+w1oL7zk2MOO1//4RYKAA96HVjnmsPPoBzqME2hrAaqX2w19JznsJPoBMkjEc7VY7dirnWc/4PrPvT/6ZUG7MSpAB0X/cUb5vBsdw27EDTmv1QDVu74aNnX1P06rgG+1UQb6/p+4DHGHQYyZUb7M3teMcnFpxOOOCs5B0W/XN+xYowDk6gMZAP4PCVS8UOrNjrEAAAAASUVORK5CYII="/>
  <text id="openvisatunisie.com_" data-name="openvisatunisie.com " class="cls-1" transform="translate(96.332 187.041) scale(2.041)"><tspan x="0">openvisatunisie.com</tspan></text>
  <text id="Besoin_d_aide_pour_votre_dossier_de_Visa_" data-name="Besoin d&apos;aide pour votre  dossier de Visa ?   " class="cls-2" transform="translate(285.139 82.849) scale(1.979)"><tspan x="0">Besoin d&apos;aide pour votre </tspan><tspan x="0" dy="8.683">dossier de Visa ?</tspan></text>
  <image id="_g" data-name="&apos;g" x="269" y="34" width="27" height="26" xlink:href="data:img/png;base64,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"/>
  <path class="cls-3" d="M251.33,163.2h108.8v40.464H251.33V163.2Z"/>
  <image id="download" x="207" y="160" width="52" height="46" xlink:href="data:img/png;base64,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"/>
  <text id="Cliquer_ici" data-name="Cliquer ici" class="cls-4" transform="translate(306.759 189.461) scale(2.484)"><tspan x="0">Cliquer ici</tspan></text>
</svg>
	     </a>
     </div>-->
     <style>

 .onestar {
   width: 16px;
     height: 19px;
     background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
     background-size: 72px 24px;
     background-size: 71px 13px;

 }
 .twoostarts{
   width: 29px;
     height: 19px;
     background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
     background-size: 72px 24px;
     background-size: 71px 13px;

 }
 .threstars{
   width: 43px;
     height: 19px;
     background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
     background-size: 72px 24px;
     background-size: 71px 13px;

 }

 .foorstars{
   width: 55px;
     height: 19px;
     background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
     background-size: 72px 24px;
     background-size: 71px 13px;

 }
 .fivestars{
   width: 88px;
     height: 19px;
     background: url(https://tn.tunisiebooking.com/images/5stars.svg) no-repeat;
     background-size: 72px 24px;
     background-size: 71px 13px;

 }
       .cls-1, .cls-2, .cls-4 {
         font-size: 7.236px;
         text-anchor: middle;
         font-family: Roboto;
       }

       .cls-1 {
         fill: #081c73;
         font-weight: 500;
       }

       .cls-2 {
         fill: #b5367e;
       }

       .cls-2, .cls-4 {
         font-weight: 700;
       }

       .cls-3 {
         fill: #822a7b;
         fill-rule: evenodd;
       }

       .cls-4 {
         fill: #fefefe;
       }
     </style>
    </div>
	<div id="box_hotel_cons" class="seidbar shadow-container panel panel-info box_hotels_consultes" style=" display:none" >
	<div class="titrhotelcons" style="display:none">Meilleurs hotels Tunisie déjà vus
	</div>
	<div id="hotel_consulte" style="clear:both;display:none"></div>

	</div>
	<div class="clear_both"></div>