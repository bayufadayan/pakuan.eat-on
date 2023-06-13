@extends('admin.main-admin')

@section('admin-content')
    <br><br><br>
    <div class="container">
        <div class="mt-3 ms-5 pe-2">
            <a href="/admin/item-settings"><button type="button" class="btn btn-secondary"><i
                        class="fa-solid fa-arrow-left pe-2"></i>Back</button></a>
        </div>
        <div class="admin-page-title px-5 pt-3 pb-4">
            <p class="h3">&lbrack;<i class="fa-solid fa-plus"></i>&rbrack; Add New Item</p>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin/item-settings/add-item" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name-input">Name</label>
                                <input type="text" id="name-input" name="name"
                                    class="form-control @error('name')is-invalid @enderror" required
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select @error('category') is-invalid @enderror" name="category"
                                    aria-label="Default select example">
                                    <option>Pilih Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category') == $category->id ? 'selected' : '' }}>
                                            {{ $category->id }} -
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price-input">Price</label>
                                <input type="number" id="price-input" name="price"
                                    class="form-control @error('price') is-invalid @enderror" required
                                    value="{{ old('price') }}">
                                @error('price')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description-input">Description</label>
                                <textarea id="description-input" name="description"
                                class="form-control @error('description') is-invalid @enderror"
                                    rows="4" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Resto</label>
                                <select class="form-select @error('resto') is-invalid @enderror" name="resto"
                                    aria-label="Default select example">
                                    <option value="">Pilih Resto</option>
                                    @foreach ($restos as $resto)
                                        <option value="{{ $resto->id }}"
                                            {{ old('resto') == $resto->id ? 'selected' : '' }}>
                                            {{ $resto->id }} -
                                            {{ $resto->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('resto')
                                    <div class="invalid-feedback" style="text-align:right">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
