@extends('layouts.app')
@section('meta_title', 'Sobre mì ')


@section('content')

    <div class="container mb-8">
        <div class="flex justify-center">
            <main class="mb-auto">
                <div class="divide-y">
                    <div class="pt-6 pb-8 space-y-2 md:space-y-5">
                        <h1
                            class="text-3xl font-extrabold leading-9 tracking-tight text-cyan-500 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                            Sobre mí</h1>
                    </div>
                    <div class="items-start space-y-2 xl:grid xl:grid-cols-3 xl:gap-x-8 xl:space-y-0">
                        <div class="flex flex-col items-center pt-8 space-x-2"><span
                                style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;"><span
                                    style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img
                                        alt="" aria-hidden="true"
                                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTkyIiBoZWlnaHQ9IjE5MiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiLz4="
                                        style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span><img
                                    alt="avatar"
                                    srcset="{{ asset('storage/blog/profile.jpg') }}"
                                    src="{{ asset('storage/blog/profile.jpg') }}"
                                    decoding="async" data-nimg="intrinsic" class="w-48 h-48 rounded-full"
                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript></span>
                            <h3 class="pt-4 pb-2 text-2xl font-bold leading-8 tracking-tight">Iván Portillo</h3>
                            <div class="text-gray-500 dark:text-gray-400"> Backend developer</div>
                        </div>
                        <div class="pt-8 pb-8 prose dark:prose-dark max-w-none xl:col-span-2">
                            <p>
                                Soy un desarrollador backend con más de 5 años de experiencia en PHP y en los frameworks Laravel y Symfony. Durante mi carrera, he trabajado en diversos sectores y empresas, creando sistemas backend y desarrollando servicios API de alto rendimiento.
                            </p>
                            <p>
                                Mi pasión por la programación y mi dedicación a las mejores prácticas, como los principios SOLID, me han permitido entregar soluciones de software robustas y escalables.
                                Mi enfoque principal es garantizar la calidad del código y la eficiencia del sistema, optimizando el rendimiento y la seguridad.
                            <p>
                                A lo largo de mi trayectoria profesional, he adquirido habilidades técnicas sólidas en el desarrollo de aplicaciones web, la administración de bases de datos y la implementación de soluciones empresariales.
                                Mi experiencia me ha llevado a trabajar en proyectos de diversa envergadura, desde pequeñas startups hasta grandes empresas, lo que me ha brindado una perspectiva amplia y una capacidad para adaptarme rápidamente a diferentes entornos
                            </p>
                            <p>
                                Además de mi experiencia técnica, también poseo habilidades de comunicación y trabajo en equipo que me permiten colaborar eficazmente con otros desarrolladores, diseñadores y especialistas en diferentes disciplinas.
                                Creo en la importancia de la colaboración y la sinergia para lograr resultados excepcionales.
                            </p>
                            <p>
                                Estoy entusiasmado con las últimas tecnologías y siempre estoy buscando oportunidades para mejorar mis habilidades y mantenerme actualizado en el campo del desarrollo web.
                                Mi objetivo es seguir creciendo profesionalmente y enfrentar desafíos emocionantes mientras desarrollo soluciones innovadoras.
                            </p>
                            <p>
                                Si buscas un desarrollador backend apasionado, con experiencia en PHP, Laravel, Symfony y una sólida comprensión de las mejores prácticas, estoy listo para ayudarte a llevar tus proyectos al siguiente nivel.
                                ¡No dudes en contactarme y trabajar juntos para alcanzar el éxito!
                            </p>
                            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                Puedes contactar conmigo a través del
                                formulario de  <a href="{{ route('contact') }}">contacto</a>, mis redes sociales o mi correo <a class="text-blue-800"
                                    href="mailto:blognotasdesarrolloweb@gmail.com">blognotasdesarrolloweb@gmail.com</a>
                            </p>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
