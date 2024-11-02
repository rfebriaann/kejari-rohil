<table>
    <thead>
        <tr>
            @foreach ($fields as $field)
                <th>{{ ucfirst(str_replace('_', ' ', $field)) }}</th>
            @endforeach
            <th>Nama Terdakwa</th>
            <th>Barang Bukti</th>
            <th>Jumlah Barang Bukti</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dakwaans as $dakwaan)
            @php
                // Prepare related data
                $terdakwaNames = $dakwaan->terdakwaks->pluck('nama')->join(', ');
                $barangBuktiDescriptions = $dakwaan->barangBuktis->pluck('barang_bukti')->join(', ');
                $barangBuktiQuantities = $dakwaan->barangBuktis->pluck('jumlah')->join(', ');
            @endphp
            <tr>
                @foreach ($fields as $field)
                    <td>{{ $dakwaan->$field }}</td>
                @endforeach
                <td>{{ $terdakwaNames }}</td>
                <td>{{ $barangBuktiDescriptions }}</td>
                <td>{{ $barangBuktiQuantities }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
