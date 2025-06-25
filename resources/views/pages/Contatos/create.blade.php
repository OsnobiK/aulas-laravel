@extends ('index')

@section ('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h1">Add Contacts</h1>
</div>
<form class="form" method="POST" acion="{{ route('contatos.create.post') }}">
@csrf     
<div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" id="nome" class="form-control @error('nome) is-invalid @enderror" name="nome">
 
            @if($errors->has('nome'))
                <div class="invalid-feedback">
                    The Name Field is Required (example: Thomas Turbano Pinto Das Neves)
                </div>
            @endif
    </div>


    <div class="mb-3">
        <label class="form-label">Telefone</label>
        <input type="text" id="telefoneMask"  class="form-control @error ('numero') is-invalid @enderror" name="numero">
         @if($errors->has('numero'))
                <div class="invalid-feedback">
                    The telephone Field is Required (example:(xx)xxxxx-xxxx)
                </div>
            @endif
    </div>


    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="text" class="form-control @error ('email') is-invalid @enderror" name="email">
         @if($errors->has('email'))
                <div class="invalid-feedback">
                    The E-mail Field is Required (example: calebinhogames@gameplayr.com.br)
                </div>
            @endif
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection