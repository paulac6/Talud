<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar ">
				<div class="sidebar-img">
					<a class="navbar-brand" href="index-2.html"><img alt="..." class="navbar-brand-img main-logo" src="assets-dashboard/css/logo m.png"> <img alt="..." class="navbar-brand-img logo" src="assets-dashboard/css/logo logo m.png"></a>
					<ul class="side-menu">
					<li class="slide">
							<a class="side-menu__item " data-toggle="slide" href="#"><i class="side-menu__icon fa fa-home"></i><span class="side-menu__label">Inicio</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
							<li>
									<a class="slide-item {{$active=='home' ? 'active': ''}}" href="{{route('home')}}"><i class="side-menu__icon fa fa-home"></i>Inicio</a>
									</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item " data-toggle="slide" href="#"><i class="side-menu__icon fa fa-screwdriver"></i><span class="side-menu__label">Materia Prima</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a class="slide-item {{$active=='materiales' ? 'active': ''}}" href="{{route('material.index')}}"><i class="side-menu__icon fa fa-wrench"></i>Materiales</a>
								</li>
								<li>
									<a class="slide-item {{$active=='marcas' ? 'active': ''}}" href="{{route('marca.index')}}"><i class="side-menu__icon fa fa-marker"></i>Marcas</a>
								</li>
								<li>
									<a class="slide-item {{$active=='tipos' ? 'active': ''}}" href="{{route('tipo.index')}}"><i class="side-menu__icon fa fa-mouse-pointer""></i>Tipos De Material</a>
								</li>
								<li>
									<a class="slide-item {{$active=='proveedores' ? 'active': ''}}" href="{{route('proveedore.index')}}"><i class="side-menu__icon fa fa-truck-loading""></i>Proveedores</a>
								</li>
								<li>
									<a class="slide-item {{$active=='entrada' ? 'active': ''}}" href="{{route('entrad.index')}}"><i class="side-menu__icon fa fa-gopuram""></i>Entrada</a>
								</li>
								<li>
									<a class="slide-item {{$active=='entradam' ? 'active': ''}}" href="{{route('entrada.index')}}"><i class="side-menu__icon fa fa-gopuram""></i>Entrada Material</a>
								</li>
								<li>
									<a class="slide-item {{$active=='salida' ? 'active': ''}}" href="{{route('salid.index')}}"><i class="side-menu__icon fa fa-gopuram""></i>Salida</a>
								</li>
								<li>
									<a class="slide-item {{$active=='salidam' ? 'active': ''}}" href="{{route('salida.index')}}"><i class="side-menu__icon fa fa-gopuram""></i>Salida Material</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-building"></i><span class="side-menu__label">Proyectos</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
							<li>
									<a class="slide-item {{$active=='categorias' ? 'active': ''}}" href="{{route('categoria.index')}}"><i class="side-menu__icon fa fa-home""></i>Categoria</a>
								</li>
								<li>
									<a class="slide-item {{$active=='obras' ? 'active': ''}}" href="{{route('obra.index')}}"><i class="side-menu__icon fa fa-school""></i>Obras</a>
								</li>
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-clipboard"></i><span class="side-menu__label">Empleados</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
							<li>
									<a class="slide-item {{$active=='usuarios' ? 'active': ''}}" href="{{route('usuario.index')}}"><i class="side-menu__icon fa fa-user""></i>Usuarios</a>
								</li>
								<li>
									<a class="slide-item {{$active=='roles' ? 'active': ''}}" href="{{route('role.index')}}"><i class="side-menu__icon fa fa-file-archive"></i>Roles</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-users"></i><span class="side-menu__label">Consumidores</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
							<li>
									<a class="slide-item {{$active=='clientes' ? 'active': ''}}" href="{{route('cliente.index')}}"><i class="side-menu__icon fa fa-users""></i>Clientes</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</aside>
			<!-- Sidebar menu-->