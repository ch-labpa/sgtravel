<!DOCTYPE html>
<html lang="es">
<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120498835-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-120498835-1');
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/fav.ico">
	<meta name="author" content="SG Travel Group">
	<meta name="description" content="SG es una agencia de viajes con más de 30 años de experiencia ofrecemos las mejores ofertas de viajes, hoteles , alquiler de autos,
	excursiones, paquetes, tramites de Visas, cruceros. Somos tu mejor opción para organizar el viaje soñado.">
	<meta name="keywords" content="sg, sgtravel, sgtravel group, sg group, agencia sg, sg agencia, viaje, travel, agencia de viajes, agency, viajes, cruceros, vuelos, carros">
	<meta charset="UTF-8">
	<title>Reservar | SG Travel Group</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/reservar/style.css" rel="stylesheet">
	<link href="css/reservar/vendors.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

	<link rel="stylesheet" href="css/magnific-popup.css">
  	<link rel="stylesheet" href="css/jquery-ui.css">
  	<link rel="stylesheet" href="css/nice-select.css">
  	<link rel="stylesheet" href="css/animate.min.css">
  	<link rel="stylesheet" href="css/owl.carousel.css">
  	<link rel="stylesheet" href="css/jquery-ui.css">

	<script src="js/reservar/modernizr.js"></script>
</head>

<body>
	<header id="header">
		<?php include('includes/header.php'); ?>
	</header>

	<div id="preloader">
			<div data-loader="circle-side-2"></div>
	</div>

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div>
	<div class="container" style="margin-top: 4.3em;">
		<div class="row row-height bg">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<div class="wrapper">
						<div class="left_title">
							<h3>Haz tu reserva</h3>
							<p>Cómodo. Rápido. Fácil.</p>
						</div>
					</div>
				</div>
				<!--/content-left-wrapper -->
			</div>
			<!-- /content-left -->
			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form id="wrapped" method="POST">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>¿Cuando y a dónde nos vamos?</h3>
									<div class="form-group">
										<input type="text" name="dates" class="form-control required" placeholder="Fechas">
                    <i class="material-icons">calendar_today</i>
									</div>
                  <div class="row no-gutters pb-1">
										<div class="col-6 pr-2">
											<div class="form-group">
                        <input type="text" id="origen" name="origen" class="form-control required" placeholder="Desde">
                        <i class="material-icons">flight_takeoff</i>
											</div>
										</div>
										<div class="col-6 pl-2">
											<div class="form-group">
                        <input type="text" id="destino" name="destino" class="form-control required" placeholder="Hacia">
                        <i class="material-icons">flight_land</i>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="styled-select clearfix">
											 <select class="lrequired dd-select" name="clase">
												<option value="">Clase deseada</option>
												<option value="economy">Economy</option>
												<option value="premium economy">Premium economy</option>
												<option value="ejecutiva">Ejecutiva / Business</option>
												<option value="primera clase">Primera clase</option>
											</select>
										</div>
									</div>
									<div class="row no-gutters pb-1">
										<div class="col-6 pr-2">
											<div class="form-group">
												<div class="qty-buttons">
													<input type="button" value="+" class="qtyplus" name="adultos">
													<input type="digits" name="adultos" id="adultos" value="" class="qty form-control required" placeholder="Adultos">
													<input type="button" value="-" class="qtyminus" name="adultos">
												</div>
											</div>
										</div>
										<div class="col-6 pl-2">
											<div class="form-group">
												<div class="qty-buttons">
													<input type="button" value="+" class="qtyplus" name="ninos">
													<input type="digits" name="ninos" id="ninos" value="" class="qty form-control" placeholder="Niños">
													<input type="button" value="-" class="qtyminus" name="ninos">
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /step-->

								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>¿Otras cositas que quieras agregar?</h3>
									<div class="form-group options clearfix">
                    <i class="material-icons">flight</i><em>¿Ida y vuelta?</em>
										<label class="switch-light switch-ios float-right">
											<input type="checkbox" value="Twoway" name="option1">
											<span><span>No</span><span>¡Si!</span></span>
											<a></a>
										</label>
									</div>
									<div class="form-group options clearfix">
                    <i class="material-icons">local_hotel</i><em>¿Dónde quedarte? <strong>Hotel</strong></em>
										<label class="switch-light switch-ios float-right">
											<input type="checkbox" value="Hotel" name="option2">
											<span><span>No</span><span>¡Si!</span></span>
											<a></a>
										</label>
									</div>
									<div class="form-group options clearfix">
                    <i class="material-icons">directions_car</i><em>¿Cómo moverte? <strong>Carro</strong></em>
										<label class="switch-light switch-ios float-right">
											<input type="checkbox" value="Carro" name="option3">
											<span><span>No</span><span>¡Si!</span></span>
											<a></a>
										</label>
									</div>
								</div>
								<!-- /step-->

								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Ya casi terminamos...</h3>
                  <div class="row no-gutters pb-1">
										<div class="col-6 pr-2">
											<div class="form-group">
                        <input type="text" name="nombre" class="form-control required" placeholder="Nombre">
                        <i class="material-icons">person</i>
											</div>
										</div>
										<div class="col-6 pl-2">
											<div class="form-group">
                        <input type="text" name="apellido" class="form-control required" placeholder="Apellido">
                        <i class="material-icons">person</i>
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control required" placeholder="Email">
                    <i class="material-icons">email</i>
									</div>
									<div class="form-group">
										<input type="number" name="telefono" class="form-control required" placeholder="Telefono / Celular">
                    <i class="material-icons">call</i>
									</div>
								</div>
								<!-- /step-->

							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Atrás</button>
								<button type="button" name="forward" class="forward">Continuar</button>
								<button type="submit" name="process" class="submit">Solicitar reserva</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
		</div>
	</div>
	<footer class="footer-area">
		<div class="container">
			<?php include('includes/footer.php'); ?>
		</div>
	</footer>

	<a class="cd-nav-trigger" href=".././"><i class="lnr lnr-chevron-left"></i></a>

	<!-- COMMON SCRIPTS -->
	<script src="js/reservar/jquery-3.2.1.min.js"></script>
    <script src="js/reservar/common_scripts.min.js"></script>
	<script src="js/reservar/velocity.min.js"></script>
	<script src="js/reservar/functions.js"></script>

	<!-- Wizard script -->
	<script src="js/reservar/reservationfuncs.js"></script>
  	<script src="js/popper.min.js"></script>
  	<script src="js/vendor/bootstrap.min.js"></script>
  	<script src="js/easing.min.js"></script>
  	<script src="js/hoverIntent.js"></script>
  	<script src="js/superfish.min.js"></script>
  	<script src="js/jquery.ajaxchimp.min.js"></script>
  	<script src="js/jquery.magnific-popup.min.js"></script>
  	<script src="js/jquery.nice-select.min.js"></script>
  	<script src="js/owl.carousel.min.js"></script>
  	<script src="js/main.js"></script>
  <script>
	function autocomplete(inp, arr) {
	  var currentFocus;

	  inp.addEventListener("input", function(e) {
		  var a, b, i, val = this.value;

		  closeAllLists();
		  if (!val) { return false;}
		  currentFocus = -1;

		  a = document.createElement("DIV");
		  a.setAttribute("id", this.id + "autocomplete-list");
		  a.setAttribute("class", "autocomplete-items");

		  this.parentNode.appendChild(a);

		  for (i = 0; i < arr.length; i++) {

			if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

			  b = document.createElement("DIV");

			  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
			  b.innerHTML += arr[i].substr(val.length);

			  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

			  b.addEventListener("click", function(e) {

				  inp.value = this.getElementsByTagName("input")[0].value;

				  closeAllLists();
			  });
			  a.appendChild(b);
			}
		  }
	  });
	  inp.addEventListener("keydown", function(e) {
		  var x = document.getElementById(this.id + "autocomplete-list");
		  if (x) x = x.getElementsByTagName("div");
		  if (e.keyCode == 40) {

			currentFocus++;
			addActive(x);
		  } else if (e.keyCode == 38) {
			currentFocus--;
			addActive(x);
		  } else if (e.keyCode == 13) {
			e.preventDefault();
			if (currentFocus > -1) {
			  if (x) x[currentFocus].click();
			}
		  }
	  });
	  function addActive(x) {
		if (!x) return false;
		removeActive(x);
		if (currentFocus >= x.length) currentFocus = 0;
		if (currentFocus < 0) currentFocus = (x.length - 1);
		x[currentFocus].classList.add("autocomplete-active");
	  }
	  function removeActive(x) {
		for (var i = 0; i < x.length; i++) {
		  x[i].classList.remove("autocomplete-active");
		}
	  }
	  function closeAllLists(elmnt) {
		var x = document.getElementsByClassName("autocomplete-items");
		for (var i = 0; i < x.length; i++) {
		  if (elmnt != x[i] && elmnt != inp) {
			x[i].parentNode.removeChild(x[i]);
		  }
		}
	  }
	  document.addEventListener("click", function (e) {
		  closeAllLists(e.target);
		  });
	}

	var countries = ["Aalborg (AAL)","Aalesund (AES)","Aberdeen (ABZ)","Abu Dhabi (AUH)","Accra (ACC)","Albany (ALB)","Albuquerque (ABQ)","Alicante (ALC)","Almaty (ALA)","Anchorage (ANC)","Aruba (AUA)","Astana (TSE)","Atenas (ATH)","Austin (AUS)","Bahrein (BAH)","Baltimore (BWI)","Bangalore (BLR)","Bangkok (BKK)","Bangor (BGR)","Barcelona (BCN)","Bari (BRI)","Basilea (BSL)","Beijing (PEK)","Belfast (BHD)","Belgrado (BEG)","Ciudad de Belice (BZE)","Bergen (BGO)","Berlín (TXL)","Bilbao (BIO)","Billings (BIL)","Billund (BLL)","Birmingham (BHM)","Birmingham (BHX)","Bogotá (BOG)","Bolonia (BLQ)","Bonaire (BON)","Burdeos (BOD)","Bremen (BRE)","Bruselas (BRU)","Bucarest (OTP)","Budapest (BUD)","Buenos Aires (EZE)","Buffalo (BUF)","Burlington (BTV)","Cagliari (CAG)","Calgary (YYC)","Cancún (CUN)","Ciudad del Cabo (CPT)","Caracas (CCS)","Cardiff (CWL)","Cartagena (CTG)","Casablanca (CMN)","Catania (CTA)","Cedar Rapids (CID)","Charleston (CHS)","Charlotte (CLT)","Chengdu (CTU)","Chicago (MDW)","Chicago (ORD)","Cincinnati (CVG)","Clermont-Ferrand (CFE)","Cleveland (CLE)","Colombo (CMB)","Colorado Springs (COS)","Columbia (CAE)","Columbus (CMH)","Copenhague (CPH)","Corcho (ORK)","Curazao (CUR)","Dallas Fortworth (DAL)","Dallas Fortworth (DFW)","Dammam (DMM)","Dar Es Salaam (DAR)","Dayton (DÍA)","Delhi (DEL)","Denpasar Bali (DPS)","Denver (DEN)","Doncaster-Sheffield (DSA)","Dresde (DRS)","Dubai (DXB)","Dublín (DUB)","Durham Teesside (MME)","Dusseldorf (DUS)","Edimburgo (EDI)","Edmonton (YEG)","Eindhoven (EIN)","Entebbe-Kampala (EBB)","Faro (FAO)","Fayetteville (FAY)","Flint (FNT)","Florencia (FLR)","Fort Lauderdale (FLL)","Fort Myers (RSW)","Fort Wayne (FWA)","Frankfurt (FRA)","Freetown (FNA)","Funchal (FNC)","Gdansk (GDN)","Ginebra (GVA)","Génova (GOA)","Gerona (GRO)","Glasgow (GLA)","Gotemburgo (GOT)","Gran Canaria (LPA)","Grand Rapids (GRR)","Graz (GRZ)","Greensboro-High Point (OSG)","Greenville (GSP)","Guangzhou (CAN)","Guayaquil (GYE)","Hamburgo (HAM)","Hangzhou (HGH)","Hanóver (HAJ)","Harare (HRE)","Hartford (BDL)","La Habana (HAV)","Helsinki (HEL)","Heraklion (HER)","Hong Kong (HKG)","Honolulu (HNL)","Houston (HOU)","Houston (IAH)","Humberside (HUY)","Ibiza (IBZ)","Indianapolis (IND)","Innsbruck (INN)","Inverness (INV)","Estambul (IST)","Jacksonville (JAX)","Yakarta (CGK)","Johannesburgo (JNB)","Kansas City (MCI)","Kiev (KBP)","Kigali (KGL)","Kilimanjaro (JRO)","Knoxville (TYS)","Cracovia (KRK)","Kristiansand (KRS)","Kuala Lumpur (KUL)","Kuwait (KWI)","Lanzarote (ACE)","Larnaca (LCA)","Las Vegas (LAS)","Lexington (LEX)","Liberia (LIR)","Lima (LIM)","Linkoping (LPI)","Lisboa (LIS)","Little Rock (LIT)","Ljubljana (LJU)","Londres (LCY)","Londres (LGW)","Los Angeles (LAX)","Louisville (SDF)","Luanda (LAD)","Luxemburgo (LUX)","Lyons (LYS)","Maastricht (MST)","Madison (MSN)","Madrid (MAD)","Mallorca (PMI)","Málaga (AGP)","Malta (MLA)","Managua (MGA)","Manila (MNL)","Marquette (SAW)","Marrakech (RAK)","Marsella (MRS)","Mauricio (MRU)","Melbourne (MLB)","Memphis (MEM)","Ciudad de México (MEX)","Miami (MIA)","Milán (LIN)","Milán (MXP)","Milwaukee (MKE)","Minsk (MSQ)","Moline (MLI)","Monrovia (ROB)","Montpellier (MPL)","Montreal (YUL)","Moscú (SVO)","Mumbai (BOM)","Munich (MUC)","Muscat (MCT)","Myrtle Beach (MYR)","Nairobi (NBO)","Nantes (NTE)","Nápoles (NAP)","Nashville (BNA)","Nassau (NAS)","Nueva Orleans (MSY)","Nueva York (EWR)","Nueva York (LGA)","Newcastle (NCL)","Agradable (NCE)","Norfolk (ORF)","Norwich (NWI)","Nuremberg (NUE)","Oakland (OAK)","Oklahoma City (OKC)","Olbia (OLB)","Orlando (MCO)","Osaka (KIX)","Oslo (OSL)","Ciudad de Panamá (PTY)","Ciudad de Panamá Florida (ECP)","París (CDG)","Pensacola (PNS)","Peoria (PIA)","Filadelfia (PHL)","Phoenix (PHX)","Pisa (PSA)","Pittsburgh (PIT)","Portland (PDX)","Portland (PWM)","Porto (OPO)","Praga (PRG)","Providence (PVD)","Puerto Vallarta (PVR)","Punta Cana (PUJ)","Quito (UIO)","Raleigh-Durham (RDU)","Rapid City (RAP)","Rennes (RNS)","Richmond (RIC)","Riga (RIX)","Rio de Janeiro (GIG)","Roanoke (ROA)","Roma (FCO)","Sacramento (SMF)","Saint Louis (STL)","Salt Lake City (SLC)","Salzburgo (SZG)","San Antonio (SAT)","San Diego (SAN)","San Francisco (SFO)","San Jose (SJC)","San José (SJO)","San Jose Cabo (SJD)","San Juan (SJU)","San Pedro Sula (SAP)","Sandefjord (TRF)","Santa Ana (SNA)","Santiago (SCL)","Santo Domingo (SDQ)","Sao Paulo (GRU)","Sarasota-Bradenton (SRQ)","Savannah (SAV)","Seúl (ICN)","Sevilla (SVQ)","Shanghai (PVG)","Singapur (SIN)","Sofía (SOF)","Southampton (SOU)","División (SPU)","Spokane (GEG)","Springfield (SGF)","Santa Lucía (UVF)","St Maarten (SXM)","San Petersburgo (LED)","St Thomas Island (STT)","Stavanger (SVG)","Estocolmo (ARN)","Estrasburgo (SXB)","Stuttgart (STR)","Taipei (TPE)","Tallin (TLL)","Tampa (TPA)","Tbilisi (TBS)","Teherán (IKA)","Tel Aviv (TLV)","Tenerife (TFS)","Thessaloniki (SKG)","Tirana (TIA)","Tokio (NRT)","Toronto (YYZ)","Toulouse (TLS)","Trondheim (TRD)","Tucson (TUS)","Tulsa (TUL)","Turín (TRN)","Valencia (VLC)","Valparaíso (VPS)","Vancouver (YVR)","Venecia (VCE)","Verona (VRN)","Viena (VIE)","Vilnius (VNO)","Varsovia (WAW)","Washington (DCA)","Washington (DIA)","West Palm Beach (PBI)","Wilmington (ILM)","Xiamen (XMN)","Zagreb (ZAG)","Zurich (ZRH)","Amsterdam (AMS)","Atlanta (ATL)","Boston (BOS)","Detroit (DTW)","Minneapolis-St Paul (MSP)","Nueva York (JFK)","Rotterdam (RTM)","Seattle (SEA)","Beirut (BEY)","Panamá (PTY)","David (DAV)","Medellín (MDE)","Cali (CLO)"];

	autocomplete(document.getElementById("origen"), countries);
	autocomplete(document.getElementById("destino"), countries);
	</script>
	<script>
		$(function() {
			'use strict';
			$('input[name="dates"]').daterangepicker({
				autoUpdateInput: false,
				"opens": "left",
				locale: {
          applyLabel: 'Aplicar',
					cancelLabel: 'Cancelar',
          daysOfWeek: [
            "Dom",
            "Lun",
            "Mar",
            "Mie",
            "Jue",
            "Vie",
            "Sab" ],
          monthNames: [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agusto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre" ]
				}
			});
			$('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
				$(this).val(picker.startDate.format('DD-MM-YY') + ' > ' + picker.endDate.format('DD-MM-YY'));
			});
			$('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
				$(this).val('');
			});
		});
	</script>
	<script>
		$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
			if (scroll >= 20) {
				$("#header").addClass("header-scrolled");
			} else {
				$("#header").removeClass("header-scrolled");
			}
		});
	</script>

</body>
</html>
