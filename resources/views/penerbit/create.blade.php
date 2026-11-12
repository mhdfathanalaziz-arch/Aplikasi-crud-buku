@include('layout.header')
        <h3>penerbit</h3>
        <form action="{{ route('penerbit.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
            <label for="nama_penerbit">Nama penerbit:</label>
                <input type="text" name="nama_penerbit" id="nama_penerbit" value="{{ old('nama_penerbit') }}" placeholder="Masukkan nama penerbit" maxlength="100" required>
            </div>
                <button type="submit" class="tombol">Simpan</button>
        </form>
@include('layout.footer')