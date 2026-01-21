# Watchparty example

This is a simple example of a video server which allows multiple input streams (either for differing bitrates, or wholly different videos), which are then served over both
a web player, and through RTMP streams simultaneously.  This uses Nginx with the RTMP module (https://github.com/arut/nginx-rtmp-module) compiled in, in order to transform
incomming RTMP streams in to outgoing RTMP, HLS, and DASH streams.  This example uses HLS rather than DASH, as DASH was found to be a worse experience due to weaker player 
support.  It's easy enough to switch the Nginx config over to user either.

## Low latency settings

The best changes I've found to get a low latency experience for everyone are:

### OBS

Under Settings/Output, change the Keyframe Interval to 1 s

### Nginx

In the Nginx rtmp block, use the following settings:

  hls_fragment 1;
  hls_playlist_length 5;

hls_playlist_length can be tuned to find a good tradeoff between latency and stability.


## OBS settings

todo
