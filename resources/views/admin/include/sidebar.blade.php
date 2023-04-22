<!--APP-SIDEBAR-->
<div class="sticky">
	<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
	<div class="app-sidebar" style="background-color:blue">
		<div class="side-header">
			<a class="header-brand1" href={{ url('/') }}>
				<img src={{ asset("assets/images/brand/logo.png") }} class="header-brand-img desktop-logo" alt="logo">
				<img src={{ asset("assets/images/brand/logo-1.png") }} class="header-brand-img toggle-logo" alt="logo">
				<img src={{ asset("assets/images/brand/logo-2.png") }} class="header-brand-img light-logo" alt="logo">
				<img src={{ asset("assets/images/brand/logo-3.png") }} class="header-brand-img light-logo1" alt="logo">
			</a><!-- LOGO -->
		</div>
		<div class="main-sidemenu">
			<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
					fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
					<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
				</svg>
			</div>
			<ul class="side-menu">
				<li>
					<h3>Menu</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link {{ Request::path() ==  'admin/dashboard' ? 'active' : ''  }}" data-bs-toggle="slide" data-active="{{ is_active_route(['admin/dashboard']) }}" href="{{ route('admin.dashboard') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
						<span class="side-menu__label">Dashboard</span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
						<span class="side-menu__label">Scholarships</span><i class="angle fa fa-angle-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a href={{ route('admin.create-scholarship') }} class="slide-item {{ Request::path() ==  'admin/create-scholarship' ? 'active' : ''  }}">New</a></li>
						<li><a href={{ route('admin.all-scholarships') }} class="slide-item  {{ Request::path() ==  'admin/all-scholarships' ? 'active' : ''  }}">All</a></li>
						<li><a href={{ route('admin.published-scholarships') }} class="slide-item {{ Request::path() ==  'admin/published-scholarships' ? 'active' : ''  }}">Published</a></li>
						<li><a href={{ route('admin.unpublished-scholarships') }} class="slide-item {{ Request::path() ==  'admin/unpublished-scholarships' ? 'active' : ''  }}">Unpublished</a></li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
						<span class="side-menu__label">Jobs</span><i class="angle fa fa-angle-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a href={{ route('admin.create-job') }} class="slide-item {{ Request::path() ==  'admin/create-job' ? 'active' : ''  }}">New</a></li>
						<li><a href={{ route('admin.all-jobs') }} class="slide-item  {{ Request::path() ==  'admin/all-jobs' ? 'active' : ''  }}">All</a></li>
						<li><a href={{ route('admin.published-jobs') }} class="slide-item {{ Request::path() ==  'admin/published-jobs' ? 'active' : ''  }}">Published</a></li>
						<li><a href={{ route('admin.unpublished-jobs') }} class="slide-item {{ Request::path() ==  'admin/unpublished-jobs' ? 'active' : ''  }}">Unpublished</a></li>
					</ul>
				</li>
				<li>
					<h3>Pages</h3>
                <li class="slide">
				</li>
					<a class="side-menu__item" data-bs-toggle="slide" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
						<span class="side-menu__label">Edit Pages</span><i class="angle fa fa-angle-right"></i>
					</a>
					<ul class="slide-menu">
						<li><a href={{ route('admin.home-edit') }} class="slide-item {{ Request::path() ==  'admin/home-edit' ? 'active' : ''  }}">Home</a></li>
						<li><a href={{ route('admin.about-edit') }} class="slide-item {{ Request::path() ==  'admin/about-edit' ? 'active' : ''  }}">About</a></li>
						<li><a href={{ route('admin.testimonials-edit') }} class="slide-item {{ Request::path() ==  'admin/testimonials-edit' ? 'active' : ''  }}">Testimonials</a></li>
						<li><a href={{ route('admin.scholarships-edit') }} class="slide-item {{ Request::path() ==  'admin/scholarships-edit' ? 'active' : ''  }}">Scholarships</a></li>
						<li><a href="#!" class="slide-item">Login</a></li>
					</ul>
				</li>
                <li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" data-active="{{ is_active_route(['dashboard']) }}" href="{{ route('dashboard') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" style="width:1.5rem !important;margin-top:8px;margin-right:2px" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
							<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
						</svg>
						<span class="side-menu__label">Customer</span>
					</a>
				</li>
				 <li class="slide">
					<a class="side-menu__item has-link {{ Request::path() ==  'admin/settings' ? 'active' : ''  }}" data-bs-toggle="slide" data-active="{{ is_active_route(['dashboard']) }}" href="{{ route('dashboard') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" style="width:1.5rem !important;margin-top:8px;margin-right:2px" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
							<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
						</svg>
						<span class="side-menu__label">Settings</span>
					</a>
				</li>
				
			</ul>
			<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
					width="24" height="24" viewBox="0 0 24 24">
					<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
				</svg>
			</div>
		</div>
	</div>
</div>
<!--/APP-SIDEBAR-->