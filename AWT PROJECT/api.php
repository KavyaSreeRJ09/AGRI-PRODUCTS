<?php

// Your Amazon Product Advertising API credentials
$access_key = "ACCESS_KEY";
$secret_key = "SECRET_KEY";
$associate_tag = "ASSOCIATE_TAG";

// The product you want to retrieve information for
$asin = "B01M7XI25E";

// Generate the signed URL for the API request
$timestamp = gmdate("Y-m-d\TH:i:s\Z");
$params = array(
  "Service" => "AWSECommerceService",
  "Operation" => "ItemLookup",
  "AWSAccessKeyId" => $access_key,
  "AssociateTag" => $associate_tag,
  "ItemId" => $asin,
  "IdType" => "ASIN",
  "ResponseGroup" => "Offers,Images,ItemAttributes",
  "Timestamp" => $timestamp
);
ksort($params);
$query = http_build_query($params);
$to_sign = "GET\necs.amazonaws.com\n/onca/xml\n" . $query;
$signature = base64_encode(hash_hmac("sha256", $to_sign, $secret_key, true));
$signed_url = "https://ecs.amazonaws.com/onca/xml?" . $query . "&Signature=" . urlencode($signature);

// Retrieve the product information
$xml = file_get_contents($signed_url);
$product = simplexml_load_string($xml);

// Extract the product information
$title = $product->Items->Item->ItemAttributes->Title;
$price = $product->Items->Item->OfferSummary->LowestNewPrice->Amount / 100;
$currency = $product->Items->Item->OfferSummary->LowestNewPrice->CurrencyCode;

// Display the product information
echo "Title: $title";
echo "Price: $price $currency";

?>