# microservices
Backend services that communicate with each other

There are three microservices which are profile,playlist and subscription.

Playlist and subscription services will ping the profile service to retrieve informations and process data.

Profile service will also retrieve data from playlist to display the playlist recommendations

The APIs contains middleware that will make sure there won't be unrecognised call from external requests. The APIs are also tracked with versions, which make it easier for developers to maintain and update the APIs without havhing a lot of confusions.
