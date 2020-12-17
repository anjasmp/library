@if (session('toast'))
    <script>
        alert('{{ session('toast') }}')
    </script>
@endif