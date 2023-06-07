<button id="captureBtn">Capture Screenshot</button>

<script>
    $("#captureBtn").click(function() {
        window.open("{{ route('screenshot.capture') }}");
    });
</script>