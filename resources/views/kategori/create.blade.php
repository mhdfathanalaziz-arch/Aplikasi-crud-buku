@include('layout.header')
        <h3>kategori</h3>
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
            <label for="nama_kategori">Nama Kategori:</label>
                <input type="text" name="nama_kategori" id="nama_kategori" value="{{ old('nama_kategori') }}" placeholder="Masukkan nama kategori" maxlength="100" required>
            </div>
                <button type="submit" class="tombol">Simpan</button>
        </form>
@include('layout.footer')