@extends('app.layout.app', [
    'title' => 'Dash | Yobbix',
    'breadcrumb' => ['Dash', 'Publicar Empleo'],
    'pageTitle' => 'Publicar Empleo',
])



@section('css')

@endsection

@section('js')

@endsection

@section('content')
    <div class="contact-form bg-white shadow-8 rounded-4 pl-sm-10 pl-4 pr-sm-11 pr-4 pt-15 pb-13">
        <div class="upload-file mb-16 text-center">
            <div id="userActions" class="square-144 m-auto px-6 mb-7">
                <label for="fileUpload" class="mb-0 font-size-4 text-smoke">Browse or
                    Drag and Drop</label>
                <input type="file" id="fileUpload" class="sr-only" />
            </div>
            <!-- <img id="imgPrime" src="" alt="uploaded image placeholder" /> -->
            <!-- <input type="file" id="upfile"> -->
        </div>
        <form action="{{route('dash.create.jobs')}}" method="POST" >
            @csrf
            <fieldset>
                <div class="row mb-xl-1 mb-9">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4" >Titulo
                            </label>
                            <input type="text" name="title" class="form-control h-px-48" id="namedash" placeholder="Titulo" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Estado
                            </label>
                            <input type="number" name="status" class="form-control h-px-48" id="namedash" placeholder="Estado" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-8">
                    <div class="col-lg-6 mb-xl-0 mb-7">
                        <div class="form-group position-relative">
                            <label for="select3"
                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Profeccion </label>


                            <select name="profession"
                                class="form-control nice-select pl-6 arrow-3 h-px-48 w-100 font-size-4">

                                <option value=""> []</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group position-relative">
                            <label for="address"
                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Habilidad </label>
                            <select name="ability" 
                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4">
                                <option value=""> [] </option>

                            </select>
                            <span
                                class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6"></span>
                        </div>
                    </div>
                </div>
                
                   <div class="row mb-8">
                    <div class="col-md-12 mb-10">
                        <div class="form-group">
                            <label 
                                class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Experiencia </label>
                            <select name="experience" id="experience"
                                class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4">
                                <option value="0"> Seleccione </option>
                                <option value="1"> Sin experiencia </option>
                                <option value="2"> Menos de un año </option>
                                <option value="3"> Un a dos años </option>
                                <option value="4"> Dos a tres años </option>
                                <option value="5"> Tres a cinco años </option>
                                <option value="6"> Cinco a diez años </option>
                                <option value="7"> Mas de diez años </option>


                            </select>
                        </div>
                    </div>
                   </div>
                    
                  <div class="row mb-8">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4" >Fecha de Inicio
                            </label>
                            <input type="date" name="title" class="form-control h-px-48" id="namedash" placeholder="Titulo" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Fecha de Fin
                            </label>
                            <input type="date" name="status" class="form-control h-px-48" id="namedash" placeholder="Estado" required>
                        </div>
                    </div>
                  </div>
                    <div class="row mb-8">
                        <div class="col-md-12 ">
                            <div class="form-group mb-11">
                                <label  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Tipo de
                                    trabajo </label>
                                <select name="job_type" 
                                    class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4">
                                    <option value="0"> Seleccione </option>
                                    <option value="1"> Tiempo Completo </option>
                                    <option value="2"> Tiempo Parcial </option>
                                    <option value="3"> Independiente </option>
                                    <option value="4"> Temporal </option>
                                    <option value="5"> Practicas </option>
                                    <option value="6"> Voluntariado </option>
    
    
    
                                </select>
                            </div>
                        </div>
                    </div>
                        <div class=" row mb-xl-1 mb-9">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="namedash"
                                        class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Salario Minimo
                                    </label>
                                    <input type="text" name="salary_min" class="form-control h-px-48" id="salary_min"
                                       >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="select2"
                                        class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Salario
                                        Maximo</label>
                                    <input type="text" mane="salary_max" class="form-control h-px-48" id="salary_max"
                                        placeholder="" required>
                                </div>
                            </div>
                        </div>

                        <div class=" mt-4 row mb-xl-1 mb-9">

                            
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label 
                                        class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Periodo de pago </label>
                                        <select name="periodicity_payment" id="periodicity_payment"
                                        class="nice-select pl-6 h-px-48 arrow-3 w-100 font-size-4" required>
                                        <option value="" selected>Selecciona una opción</option>
                                        <option value="1"> Cada Hora </option>
                                        <option value="2"> Diario </option>
                                        <option value="3"> Semanal </option>
                                        <option value="4"> Quinsenal </option>
                                        <option value="5"> Mensual </option>
                                        <option value="6"> Anul </option>
                                        <option value="7"> Por trabajo Terminado </option>


                                    </select>
                                </div>
                            </div>

                         
                            <div class="col-md-12 mt-6">
                                <div class="form-group">
                                  <label  class="d-block text-black-2 font-size-4 font-weight-semibold mb-4">Descripcion</label>
                                  <textarea name="description" id="description" cols="30" rows="7" class="border border-mercury text-gray w-100 pt-4 pl-6" placeholder="Describe about the company what make it unique"></textarea>
                                </div>
                              </div>
                        </div>
                        <input type="button" value="Publicar Trabajo"
                            class="btn btn-green btn-h-60 text-white min-width-px-210 rounded-5 text-uppercase">
                    </div>
                
            </fieldset>
        </form>
    </div>
@endsection
