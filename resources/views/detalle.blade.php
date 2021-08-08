@include('templates.header')

<h1>Detalle del curso </h1>

<div class="row">
        <div class="col-md-6">
            <img src="https://www.zegelipae.edu.pe/sites/default/files/2019-08/banner-cursos-mobile_3.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <strong>Nombre del Curso:</strong> {{ $detalle['nombre']  }} <br><br>
            <strong>Descripción:</strong> <br><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus voluptas fuga molestias ipsa nihil reprehenderit doloremque eveniet ex odio debitis minima obcaecati, nostrum nam fugiat laborum excepturi suscipit, ratione rem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vitae, esse consequuntur animi soluta eveniet quasi accusantium laborum saepe doloremque perferendis maxime excepturi dicta quos voluptate molestiae error? Sit, numquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptates commodi corrupti ad dolores laudantium cum, natus aspernatur atque in magni blanditiis corporis repellendus quisquam consequatur facilis sapiente reiciendis quibusdam!

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci iusto sit excepturi necessitatibus totam enim perspiciatis culpa! Aut, facere. Repellendus ducimus facilis aperiam animi quas esse nostrum. Doloribus, sequi soluta!

            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse aliquam dolorum voluptate? Aut nobis ex nostrum sed, perspiciatis earum illum ea magnam sit eius minus fuga minima, quidem, possimus vero! 

            <br><br>

            <strong>Fecha de Inicio:</strong> {{ $detalle['inicio']  }} <br><br>

            <strong>Precio:</strong> S/ {{ $detalle['Precio']  }} <br><br>

            <strong>Docente:</strong> {{ $detalle['Docente']  }}
        </div>
</div>


@include('templates.footer')