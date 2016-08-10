@servers(['web' => $server])

@task('docker_images', ['on' => 'web'])
    docker images
@endtask
