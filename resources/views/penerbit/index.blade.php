@include('layout.header')
        <h3>penerbit</h3>
        <a href="{{ route('penerbit.create') }}" class="tombol">Tambah</a>
        @if (session('success'))
            <p role="status">{{ session('success') }}</p>
        @endif
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allpenerbit as $key => $r)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $r->nama_penerbit }}</td>
                    <td>
                        <form action="{{ route('penerbit.destroy', $r->id) }}" method="post">
                            <a href="{{ route('penerbit.show', $r->id) }}" class="tombol">detail</a>
                            <a href="{{ route('penerbit.edit', $r->id) }}" class="tombol">edit</a>
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