#### Get setup
```
brew cask install virtualbox
brew install docker boot2docker
boot2docker init
```

#### Forward some ports! vm must be powered off
```
for i in {49000..49900}; do
 VBoxManage modifyvm "boot2docker-vm" --natpf1 "tcp-port$i,tcp,,$i,,$i";
 VBoxManage modifyvm "boot2docker-vm" --natpf1 "udp-port$i,udp,,$i,,$i";
done
```

#### Setup virtualbox shared folders
See https://github.com/boot2docker/boot2docker/pull/284

```
mv ~/.boot2docker/boot2docker.iso ~/.boot2docker/boot2docker_orig.iso
curl -o ~/.boot2docker/boot2docker.iso https://dl.dropboxusercontent.com/u/12014139/boot2docker.iso
VBoxManage sharedfolder add boot2docker-vm -name home -hostpath $HOME
```

Start docker VM and share the OS X home directory with it
```
boot2docker up
boot2docker ssh "sudo modprobe vboxsf && mkdir -p $HOME && sudo mount -t vboxsf home $HOME"
```

#### Build the image and copy anything in the mysql folder over
````
export IMAGE=dwelch2344/lamp
docker build -t $IMAGE .
docker run -d -v $(pwd)/mysql:/tmp/mysql $IMAGE /bin/bash -c "cp -rp /var/lib/mysql/* /tmp/mysql"
```

#### Run it!
`docker run -i -t -d -v $(pwd)/www:/var/www -p 49080:80 -p 49306:3306 $IMAGE`
