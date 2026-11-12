@include('layout.header')
        <h3>edit penerbit</h3>
        <form action="{{ route('penerbit.update', $penerbit->id) }}" method="POST">
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
                <label for="nama_penerbit">Nama Penerbit:</label>
                <input type="text" name="nama_penerbit" id="nama_penerbit" value="{{ old('nama_penerbit', $penerbit->nama_penerbit) }}" maxlength="100" required>
            </div>
            <button type="submit" class="tombol">Simpan perubahan</button>
        </form>
@include('layout.footer')