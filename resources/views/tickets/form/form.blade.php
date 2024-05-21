
    
<form action="{{route('tickets.store')}}" method="POST" enctype="multipart/form-data"  id="registrationForm">
    @csrf
    <div class="glass-card container p-5">
        <div class="row">

        {{-- Input Title --}}
        <div class="col-12 col-md-6 col-lg-4">
            <div class="mb-5">
                <label for="title" class="form-label mb-2 ms-3">Titolo Ticket<span class="text-danger"><strong><sup>*</sup></strong></span></label>
                <input name="title" value="{{old('title', '')}}" type="text" class="form-control bg-transparent border-dark-light rounded-pill @error('title') is-invalid @elseif(old('title', '')) is-valid @enderror"  id="title">
                @error('title')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text mb-2 ms-3">
                        Inserisci il titolo del ticket
                    </div>
                @enderror
            </div>
        </div>

        {{-- Input category --}}
        <div class="col-6 mb-3 ">
            <label class="form-label label ms-3 mt-3" for="category">Categoria</label>
            <select class="form-select bg-transparent border-dark-light rounded-pill" name="category" id="category">
                <option 
                    value="" {{ old('category') ? '' : 'selected' }}>Scegli un'opzione
                </option>
                <option value="Bug generico">Bug generico</option>
                <option value="Richiesta aiuto">Richiesta aiuto</option>
                <option value="Errore di caricamento">Errore di caricamento</option>
            </select>
            @error('category')   
            <div class="invalid-feedback">{{$message}}</div>
        @else
            <div class="form-text mb-2 ms-3">
                Inserisci il titolo del ticket
            </div>
        @enderror
        </div>

                {{-- Input user --}}
                <div class="col-6 mb-3 ">
                    <label class="form-label label ms-3 mt-3" for="user_id">Operatore</label>
                    <select class="form-select bg-transparent border-dark-light rounded-pill" name="user_id" id="user_id">
                        <option 
                            value="" {{ old('user_id') ? '' : 'selected' }}>Scegli un'opzione
                        </option>
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                    @error('user_id')   
                    <div class="invalid-feedback">{{$message}}</div>
                @else
                    <div class="form-text mb-2 ms-3">
                        Inserisci il titolo del ticket
                    </div>
                @enderror
                </div>

        {{-- Input description --}}
        <div>
            <textarea class="col-12 mb-3" name="description" id="description"></textarea>
            @error('description')   
            <div class="invalid-feedback">{{$message}}</div>
        @else
            <div class="form-text mb-2 ms-3">
                Inserisci il titolo del ticket
            </div>
        @enderror
        </div>


    {{-- Bottoni --}}
    <div class="col d-flex justify-content-between">
        <a href="{{route('tickets.index')}}" class="rounded-pill text-dark px-2 py-2 btn-outline-index gray">
            <i class="fa-solid fa-left-long"></i>
            <span class="d-none d-md-inline-block">Torna indietro</span>
        </a> 
        <div class="d-flex gap-2">
            <button class="rounded-pill px-2 py-2 text-dark btn-outline-index green" type="submit">
                <i class="fa-solid fa-floppy-disk"></i>
                <span class="d-none d-md-inline-block">Salva</span>
            </button>
            <button class="rounded-pill px-2 py-2 btn-outline-index text-dark yellow" type="reset">
                <i class="fa-solid fa-arrows-rotate"></i>
                <span class="d-none d-md-inline-block">Svuota</span>
            </button>
        </div>
    </div>
</div>
</form>