
    
<form action="{{route('tickets.store')}}" method="POST" enctype="multipart/form-data"  id="registrationForm">
    @csrf
    <div class="glass-card container p-5">
        <div class="row align-items-center">

        {{-- Input Title --}}
        <div class="col-6">
            <div>
                <label for="title" class="form-label ms-3 mt-3">Titolo Ticket<span class="text-danger"><strong><sup>*</sup></strong></span></label>
                <input name="title" value="{{old('title', '')}}" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('title') is-invalid @elseif(old('title', '')) is-valid @enderror"  id="title">
                @error('title')   
                    <div class="invalid-feedback mb-2">{{$message}}</div>
                @else
                    <div class="form-text mb-2 ms-3">
                        Inserisci il titolo del ticket
                    </div>
                @enderror
            </div>
        </div>

        {{-- Input category --}}
        <div class="col-3">
            <label class="form-label label ms-3 mt-3" for="category" >Categoria<span class="text-danger"><strong><sup>*</sup></strong></span></label>
            <select class="form-select bg-transparent border-dark-light rounded-pill @error('category') is-invalid @elseif(old('category', '')) is-valid @enderror" name="category" id="category">
                <option 
                    value=""> -- --
                </option>
                <option @if(old('category') == 'bug') selected @endif value="bug">bug</option>
                <option @if(old('category') == 'feature request') selected @endif value="feature request">feature request</option>
                <option @if(old('category') == 'enhancement') selected @endif value="enhancement">enhancement</option>
            </select>
            @error('category')   
            <div class="invalid-feedback mb-2">{{$message}}</div>
            @else
                <div class="form-text mb-2 ms-3">
                    Seleziona una categoria
                </div>
            @enderror
        </div>

        {{-- Input user --}}
        <div class="col-3">
            <label class="form-label label ms-3 mt-3" for="user_id">Operatore<span class="text-danger"><strong><sup>*</sup></strong></span></label>
            <select class="form-select bg-transparent border-dark-light rounded-pill @error('user_id') is-invalid @elseif(old('user_id', '')) is-valid @enderror" name="user_id" id="user_id">
                <option  value="">-- -- </option>
                @foreach($users as $user)
                    <option @if($user->role == 'Admin') class="d-none" @endif @if(old('user_id') == $user->id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            @error('user_id')   
            <div class="invalid-feedback mb-2">{{$message}}</div>
            @else
                <div class="form-text mb-2 ms-3">
                    Assegna il ticket ad un operatore 
                </div>
            @enderror
        </div>

        {{-- Input description --}}
        <div class="mb-4">
            <label for="description" class="form-label label ms-3 mt-3">Inserisci una descrizione<span class="text-danger"><strong><sup>*</sup></strong></span></label>
            <textarea class="col-12 mb-0 rounded-4 border p-4 @error('description') is-invalid border-danger @elseif(old('description', '')) is-valid @enderror" name="description" id="description" rows="10"></textarea>
            @error('description')   
                <div class="invalid-feedback">{{$message}}</div>   
            @enderror
        </div>


    {{-- Bottoni --}}
    <div class="col d-flex justify-content-between">
        <a href="{{route('tickets.index')}}" class="btn btn-secondary rounded-pill fw-bold">
            <i class="fa-solid fa-left-long"></i>
            <span class="d-none d-md-inline-block">Torna indietro</span>
        </a> 
        <div class="d-flex gap-2">
            <button class="btn btn-success rounded-pill fw-bold" type="submit">
                <i class="fa-solid fa-floppy-disk"></i>
                <span class="d-none d-md-inline-block">Salva</span>
            </button>
            <button class="btn btn-warning rounded-pill fw-bold" type="reset">
                <i class="fa-solid fa-arrows-rotate"></i>
                <span class="d-none d-md-inline-block">Svuota</span>
            </button>
        </div>
    </div>
</div>
</form>