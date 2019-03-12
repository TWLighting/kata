function songDecoder(song){
    var words = song.split('WUB');
    var oring_word=[];
    words.forEach(function(item, index) {
        if(item!=''){

            oring_word.push(item);
        }
    });
    return oring_word.join(' ');

}

songDecoder('AWUBWUBWUBBWUBWUBWUBC');