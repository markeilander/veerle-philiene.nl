<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width"/>
        <title>Bedankt!</title>

        <style type="text/css">
			/*////// RESET STYLES //////*/
			body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}
			table{border-collapse:collapse;}
			img, a img{border:0; outline:none; text-decoration:none;}
			h1, h2, h3, h4, h5, h6{margin:0; padding:0;}
			p{margin: 1em 0;}

			/*////// CLIENT-SPECIFIC STYLES //////*/
			.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
			table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
			#outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
			img{-ms-interpolation-mode: bicubic;} /* Force IE to smoothly render resized images. */
			body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */

			/*////// FRAMEWORK STYLES //////*/
			.flexibleContainerCell{padding-top:20px; padding-Right:20px; padding-Left:20px;}
			.flexibleImage{height:auto;}
			.bottomShim{padding-bottom:20px;}
			.imageContent, .imageContentLast{padding-bottom:20px;}
			.nestedContainerCell{padding-top:20px; padding-Right:20px; padding-Left:20px;}

			/*////// GENERAL STYLES //////*/
			body, #bodyTable{background-color:#F5F5F5;}
			#bodyCell{padding-top:40px; padding-bottom:40px;}
			#emailBody{background-color:#FFFFFF; border:1px solid #DDDDDD; border-collapse:separate; border-radius:4px;}
			h1, h2, h3, h4, h5, h6{color:#202020; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left;}
			h6{font-size:14px; line-height:125%;}
			.textContent, .textContentLast{color:#404040; font-family:Helvetica; font-size:16px; line-height:125%; text-align:Left; padding-bottom:20px;}
			.textContent a, .textContentLast a{color:#2C9AB7; text-decoration:underline;}
			.nestedContainer{background-color:#E5E5E5; border:1px solid #CCCCCC;}

			/*////// MOBILE STYLES //////*/
			@media only screen and (max-width: 480px){			
				/*////// CLIENT-SPECIFIC STYLES //////*/
				body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */

				/*////// FRAMEWORK STYLES //////*/
				/*
					CSS selectors are written in attribute
					selector format to prevent Yahoo Mail
					from rendering media query styles on
					desktop.
				*/
				table[id="emailBody"], table[class="flexibleContainer"]{width:100% !important;}

				/*
					The following style rule makes any
					image classed with 'flexibleImage'
					fluid when the query activates.
					Make sure you add an inline max-width
					to those images to prevent them
					from blowing out. 
				*/
				img[class="flexibleImage"]{height:auto !important; width:100% !important;}

				/*
					Make buttons in the email span the
					full width of their container, allowing
					for left- or right-handed ease of use.
				*/
				table[class="emailButton"]{width:100% !important;}
				td[class="buttonContent"]{padding:0 !important;}
				td[class="buttonContent"] a{padding:15px !important;}

				td[class="textContentLast"], td[class="imageContentLast"]{padding-top:20px !important;}

				/*////// GENERAL STYLES //////*/
				td[id="bodyCell"]{padding-top:10px !important; padding-Right:10px !important; padding-Left:10px !important;}
			}
		</style>
        <!--
        	Outlook Conditional CSS

            These two style blocks target Outlook 2007 & 2010 specifically, forcing
            columns into a single vertical stack as on mobile clients. This is
            primarily done to avoid the 'page break bug' and is optional.

            More information here:
			http://templates.mailchimp.com/development/css/outlook-conditional-css
        -->
        <!--[if mso 12]>
            <style type="text/css">
            	.flexibleContainer{display:block !important; width:100% !important;}
            </style>
        <![endif]-->
        <!--[if mso 14]>
            <style type="text/css">
            	.flexibleContainer{display:block !important; width:100% !important;}
            </style>
        <![endif]-->
    </head>
    <body>
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            	<tr>
                	<td align="center" valign="top" id="bodyCell">
                    	<!-- EMAIL CONTAINER // -->
                        <!--
                        	The table "emailBody" is the email's container.
                            Its width can be set to 100% for a color band
                            that spans the width of the page.
                        -->
                    	<table border="0" cellpadding="0" cellspacing="0" width="700" id="emailBody">


							<!-- MODULE ROW // -->
                            <!--
                            	To move or duplicate any of the design patterns
                                in this email, simply move or copy the entire
                                MODULE ROW section for each content block.
                            -->
							<tr>
                            	<td align="center" valign="top">
                                	<!-- CENTERING TABLE // -->
                                    <!--
                                    	The centering table keeps the content
                                        tables centered in the emailBody table,
                                        in case its width is set to 100%.
                                    -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    	<tr>
                                        	<td align="center" valign="top">
                                            	<!-- FLEXIBLE CONTAINER // -->
                                                <!--
                                                	The flexible container has a set width
                                                    that gets overridden by the media query.
                                                    Most content tables within can then be
                                                    given 100% widths.
                                                -->
                                            	<table border="0" cellpadding="0" cellspacing="0" width="700" class="flexibleContainer">
                                                	<tr>
                                                    	<td align="center" valign="top" width="700" class="flexibleContainerCell">


                                                            <!-- CONTENT TABLE // -->
                                                            <!--
                                                            	The content table is the first element
                                                                that's entirely separate from the structural
                                                                framework of the email.
                                                            -->
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td valign="top" class="textContent">
                                                                        <h3>Alvast bedankt voor je cadeautje</h3>
                                                                        <br />
                                                                        We zien je graag op ons feestje op zondag 31 augustus van 13:30 tot 16:30 uur.
																							   <br /><br />
																							   Tot dan!
																							   <br /><br />
																							   Liefs Veerle en Philiene
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // CONTENT TABLE -->


                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // FLEXIBLE CONTAINER -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // CENTERING TABLE -->
                                </td>
                            </tr>
                            <!-- // MODULE ROW -->
								<!-- MODULE ROW // -->
							<tr>
                            	<td align="center" valign="top">
                                	<!-- CENTERING TABLE // -->
                                    <!--
                                    	The centering table keeps the content
                                        tables centered in the emailBody table,
                                        in case its width is set to 100%.
                                    -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    	<tr>
                                        	<td align="center" valign="top">
                                            	<!-- FLEXIBLE CONTAINER // -->
                                                <!--
                                                	The flexible container has a set width
                                                    that gets overridden by the media query.
                                                    Most content tables within can then be
                                                    given 100% widths.
                                                -->
                                            	<table border="0" cellpadding="0" cellspacing="0" width="700" class="flexibleContainer">
                                                	<tr>
                                                    	<td align="center" valign="top" width="700" class="flexibleContainerCell">


                                                            <!-- CONTENT TABLE // -->
                                                            <!--
                                                            	The content table is the first element
                                                                that's entirely separate from the structural
                                                                framework of the email.
                                                            -->
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td valign="top" class="textContent">
                                                                        <hr />
																							   Hieronder staan nog een keer de gegevens van het cadeautje dat je hebt gekozen.
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // CONTENT TABLE -->


                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // FLEXIBLE CONTAINER -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // CENTERING TABLE -->
                                </td>
                            </tr>
                            <!-- // MODULE ROW -->
							<!-- MODULE ROW // -->
							<tr>
                            	<td align="center" valign="top">
                                	<!-- CENTERING TABLE // -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    	<tr>
                                        	<td align="center" valign="top">
                                            	<!-- FLEXIBLE CONTAINER // -->
                                            	<table border="0" cellpadding="0" cellspacing="0" width="700" class="flexibleContainer">
                                                	<tr>
                                                    	<td valign="top" width="700" class="flexibleContainerCell">


                                                            <!-- CONTENT TABLE // -->
                                                            <!--
                                                            	Keeping the table markup in its original
                                                                order and swapping the align attribute values
                                                                allows the tables to wrap in the correct order
                                                                on small displays.
                                                            -->
                                                            <table align="Right" border="0" cellpadding="0" cellspacing="0" width="200" class="flexibleContainer">
                                                                <tr>
                                                                    <td align="Left" valign="top" class="imageContent">
                                                                        {{ HTML::image($cadeau->afbeelding, $cadeau->titel, array('class' => 'flexibleImage', 'width' => 200, 'style' => 'max-width:200px;')) }}
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // CONTENT TABLE -->


                                                            <!-- CONTENT TABLE // -->
                                                            <table align="Left" border="0" cellpadding="0" cellspacing="0" width="340" class="flexibleContainer">
                                                                <tr>
                                                                    <td valign="top" class="textContent">
                                                                        <h3>{{{$cadeau->titel}}}</h3>
                                                                        <br />
                                                                        <h6>Omschrijving</h6>
																							   {{{$cadeau->omschrijving}}}<br /><br />
																							   <h6>Winkel</h6>
																							   {{{$cadeau->winkel}}}<br /><br />
																							   <h6>Prijs</h6>
																							   {{{ Html::euroFormat($cadeau->prijs, 2, false) }}}<br /><br />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <!-- // CONTENT TABLE -->


                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- // FLEXIBLE CONTAINER -->
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // CENTERING TABLE -->
                                </td>
                            </tr>
                            <!-- // MODULE ROW -->
                        </table>
                    	<!-- // EMAIL CONTAINER -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
