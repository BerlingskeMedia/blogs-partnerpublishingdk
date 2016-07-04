<?php

$channel =<<<_XML_
<channel>
<title>What's For Dinner<title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;

$xml = simplexml_load_string($channel);
print "The $xml->title channel is available at $xml->link. ";
print "The description is \"$xml->description\"";
?>