<!--APP-SIDEBAR-->
<div class="sticky">
	<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
	<div class="app-sidebar">
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
					<h3>Scholarships</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link {{ Request::path() ==  'jobs/dashboard' ? 'active' : ''  }}" data-bs-toggle="slide" data-active="{{ is_active_route(['dashboard']) }}" href="{{ route('dashboard.jobs') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z"/></svg>
						<span class="side-menu__label">Dashboard</span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link {{ Request::path() ==  'jobs/matched' ? 'active' : ''  }}" data-bs-toggle="slide" data-active="{{ is_active_route(['matched']) }}" href="{{ route('matched.jobs') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" style="width:1.5rem !important;margin-top:8px;margin-right:2px" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
							<path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
							<path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z"/>
						  </svg>
						  <span class="side-menu__label">Matched</span>
					</a>
				</li>
				<li>
					<h3>Actions</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link {{ Request::path() ==  'jobs/saved' ? 'active' : ''  }}" data-bs-toggle="slide" data-active="{{ is_active_route(['saved']) }}" href="{{ route('saved.jobs') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" style="width:1.5rem !important;margin-top:8px;margin-right:2px" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
							<path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
						  </svg>
						<span class="side-menu__label">Favorites</span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link {{ Request::path() ==  'jobs/applied' ? 'active' : ''  }}" data-bs-toggle="slide" data-active="{{ is_active_route(['applied']) }}" href="{{ route('applied.jobs') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" style="width:1.5rem !important;margin-top:8px;margin-right:2px" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
							<path d="M6 1v3H1V1h5zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12v3h-5v-3h5zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8v7H1V8h5zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6v7h-5V1h5zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
						</svg>
						<span class="side-menu__label">Applied </span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link {{ Request::path() ==  'jobs/banned' ? 'active' : ''  }}" data-bs-toggle="slide" data-active="{{ is_active_route(['banned']) }}" href="{{ route('banned.jobs') }}">
						<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" style="width:1.5rem !important;margin-top:8px;margin-right:2px" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
							<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
							<path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z"/>
						</svg>
						  <span class="side-menu__label">Banned</span>
					</a>
				</li>
				@if (auth()->user()->is_admin)
					<li class="slide">
						<a class="side-menu__item has-link" data-bs-toggle="slide" data-active="{{ is_active_route(['admin/dashboard']) }}" href="{{ route('admin.dashboard') }}">
							<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" style="width:1.5rem !important;margin-top:8px;margin-right:2px" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
								<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
							</svg>
							<span class="side-menu__label">Admin</span>
						</a>
					</li>
				@endif
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