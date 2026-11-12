@include('layout.header')
        <h3>buku</h3>
        <a href="{{ route('buku.create') }}" class="tombol">Tambah</a>
        @if (session('success'))
            <p role="status">{{ session('success') }}</p>
        @endif
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>pengarang</th>
                    <th>tahun</th>
                    <th>penerbit</th>
                    <th>kategori</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allbuku as $key => $r)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $r->judul }}</td>
                    <td>{{ $r->pengarang }}</td>
                    <td>{{ $r->tahun_terbit }}</td>
                    <td>{{ $r->penerbit->nama_penerbit }}</td>
                    <td>{{ $r->kategori->nama_kategori }}</td>
                    <td>
                        <form action="{{ route('buku.destroy', $r->id) }}" method="post">
                            <a href="{{ route('buku.show', $r->id) }}" class="tombol">detail</a>
                            <a href="{{ route('buku.edit', $r->id) }}" class="tombol">edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tombol">hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@include('layout.footer')