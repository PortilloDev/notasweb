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
                            <div class="text-gray-500 dark:text-gray-400">Analista desarrollador</div>
                            <div class="text-gray-500 dark:text-gray-400">UNIR</div>

                        </div>
                        <div class="pt-8 pb-8 prose dark:prose-dark max-w-none xl:col-span-2">
                            <p>
                                Desarrollador de aplicaciones web con más de 4 años de experiencia, he participado en numerosos proyectos como Consultor, Arquitecto y Analista Programador.
                                Participando activamente en el desarrollando de las diferentes fases del proyecto.
                            </p>
                            <p> Estoy especializado en PHP y en sus frameworks de Laravel, Symfony y Slim. También desarrollo en otros lenguajes de programación (Java, Javascript, C#, VB) y frameworks (.NET, Net Core , Spring).
                                 A pesar de tener una fuerte orientación al backend, me manejo bien en todos los ámbitos del desarrollo web, pudiendo abarcar todos los aspectos del desarrollo. </p>

                            <p>
                                Otras tecnologías que manejo son Angular, React, Docker, Git, Azure, Bases de datos SQL y NoSql. Trabajo usando patrones de diseño, principios SOLID y clean code.
                            </p>
                                <p>Durante este tiempo he trabajo en los departamentos de sistemas y de desarrollador
                            de Kuehne Nagel, Heartcoded y UNIR. Trabajando en diversos proyectos y para varios
                            tipos de clientes.
                            También me gusta realizar proyectos personales y trabajos como freelance.</p>
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
