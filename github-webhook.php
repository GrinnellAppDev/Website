<?php
    header("Content-Type: application/json");

    $request_signature = $_SERVER["HTTP_X_HUB_SIGNATURE"];
    if ($request_signature) {

        $secret = getenv("GITHUB_WEBHOOK_SECRET");
        $request_body = file_get_contents("php://input");
        $body_hash = "sha1=" . hash_hmac("sha1", $request_body, $secret);

        if ($body_hash === $request_signature) {
            $event = $_SERVER["HTTP_X_GITHUB_EVENT"];
            if ($event === "push") {
                $output = shell_exec("git pull origin master");
                echo json_encode(array("text" => $output), JSON_PRETTY_PRINT);
                echo "\n";
                http_response_code(200);
            } else if ($event === "ping") {
                http_response_code(204);
            } else {
                echo json_encode(array(
                    "error" => "invalid_event",
                    "message" => "Event '" . $event . "' could not be handled",
                    "event" => $event
                ), JSON_PRETTY_PRINT);
                echo "\n";
                http_response_code(403);
            }
        } else {
            echo json_encode(array(
                "error" => "invalid_signature",
                "message" => "Signature '" . $request_signature . "' did not match the contents",
                "signature" => $request_signature
            ), JSON_PRETTY_PRINT);
            echo "\n";
            http_response_code(401);
        }
    } else {
        echo json_encode(array(
            "error" => "no_signature",
            "message" => "Missing header X-Hub-Signature"
        ), JSON_PRETTY_PRINT);
        echo "\n";
        http_response_code(401);
    }
?>