@include('layout.header')
        <h3>kategori</h3>
        <a href="{{ route('kategori.create') }}" class="tombol">Tambah</a>
        @if (session('success'))
            <p role="status">{{ session('success') }}</p>
        @endif
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allKategori as $key => $r)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $r->nama_kategori }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $r->id) }}" method="post">
                            <a href="{{ route('kategori.show', $r->id) }}" class="tombol">detail</a>
                            <a href="{{ route('kategori.edit', $r->id) }}" class="tombol">edit</a>
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