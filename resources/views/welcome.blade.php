@extends('layouts.app')

@section('content')

    <header>
        <div class="container pt-4">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0">
                <a class="text-white navbar-brand" href="{{ url('/') }}">
                    <img src="theme/images/logo.png" alt="" class="img-fluid" width="200">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav" aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="{{ url('/') }}#">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#team">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#gallery">Proyectos</a></li>
                        <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contacto</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="da-home-page-text" data-aos="fade-right" data-aos-duration="1000">
            <div class="container">
                <div class="col-md-10 col-sm-12 px-0 mx-0">
                    <h2 class="display-3" style="margin-left:-6px; color: rgba(63, 63, 63, 1);">Ingeniería integral</h2>
                    <h3 class="h5 mt-3" style="color: rgba(63, 63, 63, 1);">Soluciones eléctricas y tecnológicas para la empresa y el hogar</h3>
                    <a class="smooth-scroll btn btn-primary mt-4" href="#learn">Ver más</a>
                </div>
            </div>
        </div>
    </header>
    <div class="page-content">
        <div>
            <div class="da-section da-work bg-secondary" id="learn">
                <div class="container">
                    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">¿Por qué trabajar con nosotros?</div>
                    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">La calidad es nuestra identidad, por lo cual enfocamos el desarrollo de la operación en tres pilares fundamentales para alcanzar el más alto grado de confiabilidad.</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-3" data-aos="flip-left">
                                <div class="card-body mt-4 mb-1 text-center">
                                    <i class="pb-3 text-primary fas fa-briefcase fa-3x"></i>
                                    <div class="h4 pb-3">Experiencia</div>
                                    <p>El equipo posee amplia experiencia y conocimientos en las áreas de nuestra operación, somos una empresa de alta fiabilidad.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3" data-aos="zoom-in-up">
                                <div class="card-body mt-4 mb-1 text-center">
                                    <i class="pb-3 text-primary fas fa-sliders-h fa-3x"></i>
                                    <div class="h4 pb-3">Flexibilidad</div>
                                    <p>Nos adaptamos a la operación de los clientes para facilitar la ejecución de las actividades y garantizar la continuidad de los procesos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-3" data-aos="flip-right">
                                <div class="card-body mt-4 mb-1 text-center">
                                    <i class="pb-3 text-primary fas fa-trophy fa-3x"></i>
                                    <div class="h4 pb-3">Resultados</div>
                                    <p>Nuestro trabajo es efectivo, sin interrumpir el normal transcurrir del día a día, entregando el mejor resultado en el menor tiempo posible.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="da-section bg-light" id="services">
                <div class="da-services">
                    <div class="container text-center">
                        <div class="h3 pb-5 text-center" data-aos="fade-up">Nuestros servicios</div>
                        <p class="px-5 pb-5 text-center" data-aos="fade-up">Nuestra operación se enfoca hacia cuatro frentes de trabajo claramente establecidos y sobre los cuales somos especialistas.</p>
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body py-5" data-aos="zoom-in" data-aos-duration="500">
                                        <div class="text-primary">
                                            <i class="pb-3 fas fa-laptop fa-3x"></i>
                                            <p class="font-weight-bold">Tecnología</p>
                                        </div>
                                        <p>Brindamos soporte a hogares y empresas en sistemas de cámaras y seguridad, alarmas, equipos de computo, mantenimiento de hardware y suministro de software.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body py-5" data-aos="zoom-in" data-aos-duration="1000">
                                        <div class="text-primary">
                                            <i class="pb-3 far fa-lightbulb fa-3x"></i>
                                            <p class="font-weight-bold">Eléctricidad</p>
                                        </div>
                                        <p>Redes, equipos y maquinaria, insumos, a nivel residencial y empresarial, desde la ingeniería hasta el montaje, aplicación de controles y planes de mantenimiento.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body py-5" data-aos="zoom-in" data-aos-duration="1500">
                                        <div class="text-primary">
                                            <i class="pb-3 fas fa-cogs fa-3x"></i>
                                            <p class="font-weight-bold">Electromecánica</p>
                                        </div>
                                        <p>Soportamos las operaciones de producción de las empresas mediante la generación de energía, sistemas de bombeo, asesoría y suministro de repuestos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card mb-3">
                                    <div class="card-body py-5" data-aos="zoom-in" data-aos-duration="2000">
                                        <div class="text-primary">
                                            <i class="pb-3 fas fa-sun fa-3x"></i>
                                            <p class="font-weight-bold">Energía solar</p>
                                        </div>
                                        <p>Impulsamos el desarrollo económico del país mediante el uso de recursos renovables, ejecutando proyectos de energía solar fotovoltaica para hogares, empresas y agroindustria.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="da-projects" id="projects">
                <div class="row mx-0">
                    <div class="col-md-6 px-0 da-project-1" style="background-image: url('theme/images/da-img-2a.jpg');" data-aos="zoom-in"></div>
                    <div class="col-md-6 pl-5 pt-5 pb-3">
                        <div class="row">
                            <div class="col-1 da-project-icon"><i class="text-warning fas fa-video fa-2x fa-fw"></i></div>
                            <div class="col-10">
                                <div class="h4">Seguridad electrónica</div>
                                <p>Diseño, instalación y mantenimiento de CCTV, sistemas de control de acceso y vídeo porteros, sistemas contra incendios, sistemas de alarmas antirrobo, domótica.</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-1 da-project-icon"><i class="text-info fas fa-laptop fa-2x fa-fw"></i></div>
                            <div class="col-10">
                                <div class="h4">Servicios informáticos</div>
                                <p>Servicios de software y hardware, redes informáticas y telecomunicaciones, soporte técnico remoto y en sitio, asesorías, mantenimientos de impresoras y suministro de equipos.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1 da-project-icon"><i class="fas fa-plug fa-2x fa-fw"></i></div>
                            <div class="col-10">
                                <div class="h4">Soluciones eléctricas</div>
                                <p>Diseño, montaje y mantenimiento de instalaciones eléctricas residenciales e industriales, tableros de distribución, sistemas puestas a tierra, transformadores eléctricos, variadores de velocidad, motores eléctricos y eficiencia energética.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-md-6 pl-5 pt-5 pb-3">
                        <div class="row mb-3">
                            <div class="col-1 da-project-icon"><i class="text-warning fas fa-cogs fa-2x fa-fw"></i></div>
                            <div class="col-10">
                                <div class="h4">Soluciones electromecánicas</div>
                                <p>Suministro de plantas eléctricas servicio Standby 7x24, sistemas de transferencias mecánicas y electrónicas, bombas de presión de agua, aires acondicionados, sistemas de ventilación, consultoría y asesorías técnicas.</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-1 da-project-icon"><i class="text-info far fa-sun fa-2x fa-fw"></i></div>
                            <div class="col-10">
                                <div class="h4">Energía solar fotovoltaica</div>
                                <p>Diseño, instalación y mantenimiento de sistemas de bajo consumo, sistemas autónomos que utilizan baterías, controladores e inversores, ideales para la agroindustria, especialmente en lugares de difícil acceso de la red eléctrica, sistemas interconectados a red, sistema de iluminación, sistemas de riego y de bombeo alimentados 100% con energía solar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 px-0 da-project-2" style="background-image: url('theme/images/da-img-5a.jpg');" data-aos="zoom-in"></div>
                </div>
            </div>
            <div class="da-expertise">
                <div class="row mx-0">
                    <div class="col-md-6 px-0 da-exp-image" style="background-image: url('theme/images/da-img-6a.jpg');" data-aos="zoom-in"></div>
                    <div class="col-md-6 da-exp-skills">
                        <div class="container text-uppercase">
                            <h3 class="h5 mb-5">Nuestra experticia</h3>
                            <div class="col px-0 mb-4">
                                <p>informática y redes 85%</p>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col px-0 mb-4">
                                <p>Electricidad 90%</p>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col px-0 mb-4">
                                <p>Electromecánica 90%</p>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col px-0 mb-4">
                                <p>Energía solar 85%</p>
                                <div class="progress" style="height: 5px;">
                                    <div class="progress-bar" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="da-section bg-secondary text-white">
                <div class="container">
                    <div class="row px-4">
                        <div class="col-md-3 col-sm-6">
                            <div class="media py-2" data-aos="flip-up">
                                <i class="mr-3 fas fa-clipboard-check  fa-3x fa-fw"></i>
                                <div class="media-body">
                                    <div class="h5">45</div>
                                    <div class="h6">Proyectos ejecutados</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media py-2" data-aos="flip-up">
                                <i class="mr-3 fas fa-smile  fa-3x fa-fw"></i>
                                <div class="media-body">
                                    <div class="h5">645</div>
                                    <div class="h6">Clientes satisfechos</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media py-2" data-aos="flip-up">
                                <i class="mr-3 fas fa-file-alt fa-3x fa-fw"></i>
                                <div class="media-body">
                                    <div class="h5">433</div>
                                    <div class="h6">Apreciaciones</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="media py-2" data-aos="flip-up">
                                <i class="mr-3 fas fa-clock  fa-3x fa-fw"></i>
                                <div class="media-body">
                                    <div class="h5">6840</div>
                                    <div class="h6">Horas laboradas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="da-section" id="team">
                <div class="container">
                    <div class="h3 text-center" data-aos="fade-up">Miembros del equipo</div>
                </div>
                <div class="da-team carousel slide py-5" id="da-carouselIndicator" data-ride="carousel" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="container">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#da-carouselIndicator" data-slide-to="0"></li>
                            <li data-target="#da-carouselIndicator" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="theme/images/da-emp-1.jpg" alt="image"/>
                                            <div class="card-body text-center">
                                                <div class="h5">Claudia Romero</div>
                                                <p class="text-muted">Gerente</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="theme/images/da-emp-2.jpg" alt="image"/>
                                            <div class="card-body text-center">
                                                <div class="h5">Jairo Camargo</div>
                                                <p class="text-muted">Cofundador</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="theme/images/da-emp-3.jpg" alt="image"/>
                                            <div class="card-body text-center">
                                                <div class="h5">Fredy Simanca</div>
                                                <p class="text-muted">Ingeniero electromecánico</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="theme/images/da-emp-4.jpg" alt="image"/>
                                            <div class="card-body text-center">
                                                <div class="h5">Melissa Díaz</div>
                                                <p class="text-muted">Líder de operaciones</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="theme/images/da-emp-5.jpg" alt="image"/>
                                            <div class="card-body text-center">
                                                <div class="h5">David López</div>
                                                <p class="text-muted">Líder de mantenimiento</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3">
                                            <img class="card-img-top" src="theme/images/da-emp-6.jpg" alt="image"/>
                                            <div class="card-body text-center">
                                                <div class="h5">Carlos Quintero</div>
                                                <p class="text-muted">Ingeniero eléctrico</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container da-gallery" id="gallery">
                <div class="h3 pb-5 text-center" data-aos="fade-up">Proyectos</div>
                <div class="card-columns">
                    <div class="card"><a href="theme/images/gallery-img-3.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="theme/images/gallery-img-3.jpg" alt="Gallery Image 1"/></a></div>
                    <div class="card"><a href="theme/images/gallery-img-5.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="theme/images/gallery-img-5.jpg" alt="Gallery Image 2"/></a></div>
                    <div class="card"><a href="theme/images/gallery-img-4.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="theme/images/gallery-img-4.jpg" alt="Gallery Image 3"/></a></div>
                    <div class="card"><a href="theme/images/gallery-img-1.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="theme/images/gallery-img-1.jpg" alt="Gallery Image 4"/></a></div>
                    <div class="card"><a href="theme/images/gallery-img-2.jpg" data-toggle="lightbox" data-gallery="da-gallery"><img class="img-fluid" src="theme/images/gallery-img-2.jpg" alt="Gallery Image 5"/></a></div>
                </div>
            </div>
            <div class="da-section">
                <div class="container da-company-brand py-5">
                    <div class="h3 pb-3 text-uppercase text-center" data-aos="fade-up">Clientes</div>
                    <p class="pb-3 text-center" data-aos="fade-up">Empresas que han puesto su confianza en nosotros</p>
                    <div class="row">
                        <div class="col-md-3 text-center mt-4"><img class="img-fluid" src="theme/images/company-1.png" alt="CDA Ciudad Bonita"/></div>
                        <div class="col-md-3 text-center mt-4"><img class="img-fluid" src="theme/images/company-2.png" alt="Espumas Santander"/></div>
                        <div class="col-md-3 text-center mt-4"><img class="img-fluid" src="theme/images/company-3.png" alt="Estatal de Seguridad"/></div>
                        <div class="col-md-3 text-center mt-4"><img class="img-fluid" src="theme/images/company-4.png" alt="West Army Security"/></div>
                    </div>
                </div>
            </div>
            <div class="da-section da-brand bg-secondary">
                <div class="container text-center text-white">
                    <div class="carousel slide pb-5" id="da-brand-carouselIndicator" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#da-brand-carouselIndicator" data-slide-to="0"></li>
                            <li data-target="#da-brand-carouselIndicator" data-slide-to="1"></li>
                            <li data-target="#da-brand-carouselIndicator" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <p>"Seted.co ha sido nuestro aliado en la seguridad de las instalaciones de nuestra empresa, nos brinda un servicio de mucha calidad."</p>
                                        <div class="h6 text-uppercase">Espumas Santander</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <p>"Tenemos la responsabilidad de garantizar la integridad de las instalaciones y equipos, y Seted.co ha sido el proveedor de la mejor tecnología para el desarrollo de nuestra labor."</p>
                                        <div class="h6 text-uppercase">Estatal de Seguridad</div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <p>"Seted.co nos ha provisto de lo mejor en CCTV, estamos muy agradecidos por su valioso trabajo, continuaremos fortaleciendo esta gran alianza para alcanzar el crecimiento mutuo"</p>
                                        <div class="h6 text-uppercase">CDA Ciudad Bonita</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="da-contact" id="contact">
                <div class="da-contact-detail" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="container">
                        <div class="card py-4 px-4">
                            <div class="h4 pb-4">Escríbenos</div>
                            <div class="row">
                                <div class="col-md-7 col-sm-12 mb-3">
                                    <div class="da-contact-message">
                                        <form action="{{ route('contact') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 mb-3">
                                                    <input class="mr-3 form-control" type="text" name="name" value="{{ old('name') }}" placeholder="*Nombre" required="required"/>

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 col-sm-12 mb-3">
                                                    <input class="form-control" type="tel" name="phone" value="{{ old('phone') }}" placeholder="*Teléfono"/>

                                                    @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="*Correo" required="required"/>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    <textarea class="form-control" name="message" value="{{ old('message') }}" placeholder="*Tu mensaje" rows="4" required="required"></textarea>

                                                    @error('message')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col">
                                                    {!! htmlFormSnippet() !!}

                                                    @error('recaptcha')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <button class="btn btn-primary" type="submit">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <address>
                                        <p>Estamos comprometidos en mantener contacto permanente con clientes, aliados y comunidad, nuestro equipo estará presto a atender cualquier solicitud.</p>
                                        <p><b>Dirección:</b> Bucaramanga</p>
                                        <p><b>Teléfono:</b> (057) 316 123 4455</p>
                                        <p><b>Correo:</b> <a href="mailto:contacto@seted.co">contacto@seted.co</a></p>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-secondary da-section">
        <div class="container text-white">
            <div class="row">
                <div class="col-md-4">
                    <div class="h2">{{ config('app.name') }}</div>
                    <p class="mb-0">contacto@seted.co</p>
                    <p>(057) 316 123 4455</p>
                </div>
                <div class="col-md-4">
                    <div class="h6 pb-2">Síguenos</div>
                    <ul>
                        <li><a class="da-social-link" href="https://www.facebook.com/SETEDCO-INGENIERIA-557599321285008/" target="_blank">Facebook</a></li>
                        <li><a class="da-social-link" href="https://www.instagram.com/setedco_ingenieria/" target="_blank">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="h6 pb-2">Derechos de autor</div>
                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados</p>
                    <p>Diseño - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
                </div>
            </div>
        </div>
    </footer>
    <div id="scrolltop">
        <button class="btn btn-primary"><span class="icon"><i class="fas fa-angle-up fa-2x"></i></span></button>
    </div>

@endsection
