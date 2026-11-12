@include('layout.header')
        <h3>edit kategori</h3>
        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori:</label>
                <input type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" maxlength="100" required>
            </div>
            <button type="submit" class="tombol">Simpan perubahan</button>
        </form>
@include('layout.footer')