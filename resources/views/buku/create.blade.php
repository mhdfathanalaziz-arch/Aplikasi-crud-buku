@include('layout.header')
        <h3>buku</h3>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            @if ($errors->any())
                <div role="alert">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
            <label for="judul">Judul buku:</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul') }}" placeholder="Masukkan judul buku" maxlength="100" required>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" name="pengarang" id="pengarang" value="{{ old('pengarang') }}" placeholder="Masukkan nama pengarang" maxlength="100" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit:</label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit') }}" placeholder="Masukkan tahun terbit" min="1900" max="{{ date('Y') }}" required>
            </div>
            <div class="form-group">
                <label for="penerbit_id">Penerbit:</label>
                <select name="penerbit_id" id="penerbit_id" required>
                    <option value="">Pilih penerbit</option>
                    @foreach ($penerbit as $p)
                        <option value="{{ $p->id }}" {{ old('penerbit_id') == $p->id ? 'selected' : '' }}>{{ $p->nama_penerbit }}</option>
                    @endforeach 
                </select>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori:</label>
                <select name="kategori_id" id="kategori_id" required>
                    <option value="">Pilih kategori</option>
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}" {{ old('kategori_id') == $k->id ? 'selected' : '' }}>{{ $k->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
                <button type="submit" class="tombol">Simpan</button>
        </form>
@include('layout.footer')