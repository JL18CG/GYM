@csrf


<div class="row">
    <div class="col-sm-12 col-md-8 col-lg-8 form-group" >
        <label class="ml-2">Nombre de la rutina</label>
        <input class= "form-control " type="text" name="nombre" value="{{ old('nombre') }} "  placeholder="Nombre de la rutina">
    </div>

    
    <input type="hidden"  name="nivelsuscripcion" value="3">
    
    <input type="hidden"  name="id_user" value="{{ Auth::user()->id }} ">

    
</div>
    
<div class="col-sm-12 col-md-4 col-lg-4 " >
    <label class="ml-2">Imagen</label> 
    <input class= "form-control-file" type="file" name="imagen" value="" accept="image/*" placeholder="Imagen" style="z-index: 50">
</div>

    <button type="submit" id="btnDatosRutinas" class="btn btn-primary float-right">Guardar</button>
    {{-- <a class="btn btn-danger float-right mr-2 text-white" href="{{route('rutina.index')}}">Regresar</a> --}}