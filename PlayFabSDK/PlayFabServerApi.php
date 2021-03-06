<?php
include 'PlayFabHttp.php';

class PlayFabServerApi
{
    /// <summary>
    /// Increments  the character's balance of the specified virtual currency by the stated amount
    /// https://api.playfab.com/Documentation/Server/method/AddCharacterVirtualCurrency
    /// </summary>
    public static function AddCharacterVirtualCurrency($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddCharacterVirtualCurrency", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds the Friend user to the friendlist of the user with PlayFabId. At least one of
    /// FriendPlayFabId,FriendUsername,FriendEmail, or FriendTitleDisplayName should be initialized.
    /// https://api.playfab.com/Documentation/Server/method/AddFriend
    /// </summary>
    public static function AddFriend($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddFriend", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds a given tag to a player profile. The tag's namespace is automatically generated based on the source of the tag.
    /// https://api.playfab.com/Documentation/Server/method/AddPlayerTag
    /// </summary>
    public static function AddPlayerTag($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddPlayerTag", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds users to the set of those able to update both the shared data, as well as the set of users  in the group. Only
    /// users in the group (and the server) can add new members. Shared Groups are designed for sharing data  between a very
    /// small number of players, please see our guide: https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Server/method/AddSharedGroupMembers
    /// </summary>
    public static function AddSharedGroupMembers($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddSharedGroupMembers", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Increments  the user's balance of the specified virtual currency by the stated amount
    /// https://api.playfab.com/Documentation/Server/method/AddUserVirtualCurrency
    /// </summary>
    public static function AddUserVirtualCurrency($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AddUserVirtualCurrency", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Validated a client's session ticket, and if successful, returns details for that user
    /// https://api.playfab.com/Documentation/Server/method/AuthenticateSessionTicket
    /// </summary>
    public static function AuthenticateSessionTicket($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AuthenticateSessionTicket", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Awards the specified users the specified Steam achievements
    /// https://api.playfab.com/Documentation/Server/method/AwardSteamAchievement
    /// </summary>
    public static function AwardSteamAchievement($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/AwardSteamAchievement", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Bans users by PlayFab ID with optional IP address, or MAC address for the provided game.
    /// https://api.playfab.com/Documentation/Server/method/BanUsers
    /// </summary>
    public static function BanUsers($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/BanUsers", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Consume uses of a consumable item. When all uses are consumed, it will be removed from the player's inventory.
    /// https://api.playfab.com/Documentation/Server/method/ConsumeItem
    /// </summary>
    public static function ConsumeItem($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/ConsumeItem", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Requests the creation of a shared group object, containing key/value pairs which may  be updated by all members of the
    /// group. When created by a server, the group will initially have no members.  Shared Groups are designed for sharing data
    /// between a very small number of players, please see our guide:
    /// https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Server/method/CreateSharedGroup
    /// </summary>
    public static function CreateSharedGroup($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/CreateSharedGroup", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Deletes the specific character ID from the specified user.
    /// https://api.playfab.com/Documentation/Server/method/DeleteCharacterFromUser
    /// </summary>
    public static function DeleteCharacterFromUser($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeleteCharacterFromUser", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Deletes a shared group, freeing up the shared group ID to be reused for a new group.  Shared Groups are designed for
    /// sharing data between a very small number of players, please see our guide:
    /// https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Server/method/DeleteSharedGroup
    /// </summary>
    public static function DeleteSharedGroup($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeleteSharedGroup", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Deletes the users for the provided game. Deletes custom data, all account linkages, and statistics.
    /// https://api.playfab.com/Documentation/Server/method/DeleteUsers
    /// </summary>
    public static function DeleteUsers($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeleteUsers", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Inform the matchmaker that a Game Server Instance is removed.
    /// https://api.playfab.com/Documentation/Server/method/DeregisterGame
    /// </summary>
    public static function DeregisterGame($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/DeregisterGame", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Returns the result of an evaluation of a Random Result Table - the ItemId from the game Catalog which would have been
    /// added to the player inventory, if the Random Result Table were added via a Bundle or a call to UnlockContainer.
    /// https://api.playfab.com/Documentation/Server/method/EvaluateRandomResultTable
    /// </summary>
    public static function EvaluateRandomResultTable($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/EvaluateRandomResultTable", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Executes a CloudScript function, with the 'currentPlayerId' variable set to the specified PlayFabId parameter value.
    /// https://api.playfab.com/Documentation/Server/method/ExecuteCloudScript
    /// </summary>
    public static function ExecuteCloudScript($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/ExecuteCloudScript", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves an array of player segment definitions. Results from this can be used in subsequent API calls such as
    /// GetPlayersInSegment which requires a Segment ID. While segment names can change the ID for that segment will not change.
    /// https://api.playfab.com/Documentation/Server/method/GetAllSegments
    /// </summary>
    public static function GetAllSegments($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetAllSegments", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Lists all of the characters that belong to a specific user. CharacterIds are not globally unique; characterId must be
    /// evaluated with the parent PlayFabId to guarantee uniqueness.
    /// https://api.playfab.com/Documentation/Server/method/GetAllUsersCharacters
    /// </summary>
    public static function GetAllUsersCharacters($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetAllUsersCharacters", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified version of the title's catalog of virtual goods, including all defined properties
    /// https://api.playfab.com/Documentation/Server/method/GetCatalogItems
    /// </summary>
    public static function GetCatalogItems($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCatalogItems", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Server/method/GetCharacterData
    /// </summary>
    public static function GetCharacterData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user's character which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Server/method/GetCharacterInternalData
    /// </summary>
    public static function GetCharacterInternalData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterInternalData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified character's current inventory of virtual goods
    /// https://api.playfab.com/Documentation/Server/method/GetCharacterInventory
    /// </summary>
    public static function GetCharacterInventory($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterInventory", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked characters for the given statistic, starting from the indicated point in the leaderboard
    /// https://api.playfab.com/Documentation/Server/method/GetCharacterLeaderboard
    /// </summary>
    public static function GetCharacterLeaderboard($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterLeaderboard", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user's character which can only be read by the client
    /// https://api.playfab.com/Documentation/Server/method/GetCharacterReadOnlyData
    /// </summary>
    public static function GetCharacterReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterReadOnlyData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the details of all title-specific statistics for the specific character
    /// https://api.playfab.com/Documentation/Server/method/GetCharacterStatistics
    /// </summary>
    public static function GetCharacterStatistics($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetCharacterStatistics", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// This API retrieves a pre-signed URL for accessing a content file for the title. A subsequent  HTTP GET to the returned
    /// URL will attempt to download the content. A HEAD query to the returned URL will attempt to  retrieve the metadata of the
    /// content. Note that a successful result does not guarantee the existence of this content -  if it has not been uploaded,
    /// the query to retrieve the data will fail. See this post for more information:
    /// https://community.playfab.com/hc/en-us/community/posts/205469488-How-to-upload-files-to-PlayFab-s-Content-Service.
    /// Also, please be aware that the Content service is specifically PlayFab's CDN offering, for which standard CDN rates
    /// apply.
    /// https://api.playfab.com/Documentation/Server/method/GetContentDownloadUrl
    /// </summary>
    public static function GetContentDownloadUrl($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetContentDownloadUrl", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked friends of the given player for the given statistic, starting from the indicated point in the
    /// leaderboard
    /// https://api.playfab.com/Documentation/Server/method/GetFriendLeaderboard
    /// </summary>
    public static function GetFriendLeaderboard($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetFriendLeaderboard", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the current friends for the user with PlayFabId, constrained to users who have PlayFab accounts. Friends from
    /// linked accounts (Facebook, Steam) are also included. You may optionally exclude some linked services' friends.
    /// https://api.playfab.com/Documentation/Server/method/GetFriendsList
    /// </summary>
    public static function GetFriendsList($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetFriendsList", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked users for the given statistic, starting from the indicated point in the leaderboard
    /// https://api.playfab.com/Documentation/Server/method/GetLeaderboard
    /// </summary>
    public static function GetLeaderboard($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetLeaderboard", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked characters for the given statistic, centered on the requested user
    /// https://api.playfab.com/Documentation/Server/method/GetLeaderboardAroundCharacter
    /// </summary>
    public static function GetLeaderboardAroundCharacter($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetLeaderboardAroundCharacter", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of ranked users for the given statistic, centered on the currently signed-in user
    /// https://api.playfab.com/Documentation/Server/method/GetLeaderboardAroundUser
    /// </summary>
    public static function GetLeaderboardAroundUser($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetLeaderboardAroundUser", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves a list of all of the user's characters for the given statistic.
    /// https://api.playfab.com/Documentation/Server/method/GetLeaderboardForUserCharacters
    /// </summary>
    public static function GetLeaderboardForUserCharacters($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetLeaderboardForUserCharacters", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Returns whatever info is requested in the response for the user. Note that PII (like email address, facebook id)
    /// may be returned. All parameters default to false.
    /// https://api.playfab.com/Documentation/Server/method/GetPlayerCombinedInfo
    /// </summary>
    public static function GetPlayerCombinedInfo($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerCombinedInfo", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the player's profile
    /// https://api.playfab.com/Documentation/Server/method/GetPlayerProfile
    /// </summary>
    public static function GetPlayerProfile($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerProfile", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// List all segments that a player currently belongs to at this moment in time.
    /// https://api.playfab.com/Documentation/Server/method/GetPlayerSegments
    /// </summary>
    public static function GetPlayerSegments($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerSegments", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Allows for paging through all players in a given segment. This API creates a snapshot of all player profiles that match
    /// the segment definition at the time of its creation and lives through the Total Seconds to Live, refreshing its life span
    /// on each subsequent use of the Continuation Token. Profiles that change during the course of paging will not be reflected
    /// in the results. AB Test segments are currently not supported by this operation.
    /// https://api.playfab.com/Documentation/Server/method/GetPlayersInSegment
    /// </summary>
    public static function GetPlayersInSegment($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayersInSegment", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the current version and values for the indicated statistics, for the local player.
    /// https://api.playfab.com/Documentation/Server/method/GetPlayerStatistics
    /// </summary>
    public static function GetPlayerStatistics($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerStatistics", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the information on the available versions of the specified statistic.
    /// https://api.playfab.com/Documentation/Server/method/GetPlayerStatisticVersions
    /// </summary>
    public static function GetPlayerStatisticVersions($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerStatisticVersions", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Get all tags with a given Namespace (optional) from a player profile.
    /// https://api.playfab.com/Documentation/Server/method/GetPlayerTags
    /// </summary>
    public static function GetPlayerTags($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayerTags", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Facebook identifiers.
    /// https://api.playfab.com/Documentation/Server/method/GetPlayFabIDsFromFacebookIDs
    /// </summary>
    public static function GetPlayFabIDsFromFacebookIDs($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromFacebookIDs", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the unique PlayFab identifiers for the given set of Steam identifiers. The Steam identifiers  are the profile
    /// IDs for the user accounts, available as SteamId in the Steamworks Community API calls.
    /// https://api.playfab.com/Documentation/Server/method/GetPlayFabIDsFromSteamIDs
    /// </summary>
    public static function GetPlayFabIDsFromSteamIDs($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPlayFabIDsFromSteamIDs", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom publisher settings
    /// https://api.playfab.com/Documentation/Server/method/GetPublisherData
    /// </summary>
    public static function GetPublisherData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetPublisherData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the configuration information for the specified random results tables for the title, including all ItemId
    /// values and weights
    /// https://api.playfab.com/Documentation/Server/method/GetRandomResultTables
    /// </summary>
    public static function GetRandomResultTables($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetRandomResultTables", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves data stored in a shared group object, as well as the list of members in the group.  The server can access all
    /// public and private group data. Shared Groups are designed for sharing data between a very  small number of players,
    /// please see our guide: https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Server/method/GetSharedGroupData
    /// </summary>
    public static function GetSharedGroupData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetSharedGroupData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the current server time
    /// https://api.playfab.com/Documentation/Server/method/GetTime
    /// </summary>
    public static function GetTime($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetTime", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom title settings
    /// https://api.playfab.com/Documentation/Server/method/GetTitleData
    /// </summary>
    public static function GetTitleData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetTitleData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the key-value store of custom internal title settings
    /// https://api.playfab.com/Documentation/Server/method/GetTitleInternalData
    /// </summary>
    public static function GetTitleInternalData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetTitleInternalData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title news feed, as configured in the developer portal
    /// https://api.playfab.com/Documentation/Server/method/GetTitleNews
    /// </summary>
    public static function GetTitleNews($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetTitleNews", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the relevant details for a specified user
    /// https://api.playfab.com/Documentation/Server/method/GetUserAccountInfo
    /// </summary>
    public static function GetUserAccountInfo($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserAccountInfo", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Gets all bans for a user.
    /// https://api.playfab.com/Documentation/Server/method/GetUserBans
    /// </summary>
    public static function GetUserBans($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserBans", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Server/method/GetUserData
    /// </summary>
    public static function GetUserData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Server/method/GetUserInternalData
    /// </summary>
    public static function GetUserInternalData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserInternalData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the specified user's current inventory of virtual goods
    /// https://api.playfab.com/Documentation/Server/method/GetUserInventory
    /// </summary>
    public static function GetUserInventory($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserInventory", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Server/method/GetUserPublisherData
    /// </summary>
    public static function GetUserPublisherData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserPublisherData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Server/method/GetUserPublisherInternalData
    /// </summary>
    public static function GetUserPublisherInternalData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserPublisherInternalData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the publisher-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Server/method/GetUserPublisherReadOnlyData
    /// </summary>
    public static function GetUserPublisherReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserPublisherReadOnlyData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Retrieves the title-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Server/method/GetUserReadOnlyData
    /// </summary>
    public static function GetUserReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GetUserReadOnlyData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Grants the specified character type to the user. CharacterIds are not globally unique; characterId must be evaluated
    /// with the parent PlayFabId to guarantee uniqueness.
    /// https://api.playfab.com/Documentation/Server/method/GrantCharacterToUser
    /// </summary>
    public static function GrantCharacterToUser($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GrantCharacterToUser", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds the specified items to the specified character's inventory
    /// https://api.playfab.com/Documentation/Server/method/GrantItemsToCharacter
    /// </summary>
    public static function GrantItemsToCharacter($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GrantItemsToCharacter", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds the specified items to the specified user's inventory
    /// https://api.playfab.com/Documentation/Server/method/GrantItemsToUser
    /// </summary>
    public static function GrantItemsToUser($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GrantItemsToUser", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds the specified items to the specified user inventories
    /// https://api.playfab.com/Documentation/Server/method/GrantItemsToUsers
    /// </summary>
    public static function GrantItemsToUsers($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/GrantItemsToUsers", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Modifies the number of remaining uses of a player's inventory item
    /// https://api.playfab.com/Documentation/Server/method/ModifyItemUses
    /// </summary>
    public static function ModifyItemUses($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/ModifyItemUses", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Moves an item from a character's inventory into another of the users's character's inventory.
    /// https://api.playfab.com/Documentation/Server/method/MoveItemToCharacterFromCharacter
    /// </summary>
    public static function MoveItemToCharacterFromCharacter($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/MoveItemToCharacterFromCharacter", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Moves an item from a user's inventory into their character's inventory.
    /// https://api.playfab.com/Documentation/Server/method/MoveItemToCharacterFromUser
    /// </summary>
    public static function MoveItemToCharacterFromUser($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/MoveItemToCharacterFromUser", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Moves an item from a character's inventory into the owning user's inventory.
    /// https://api.playfab.com/Documentation/Server/method/MoveItemToUserFromCharacter
    /// </summary>
    public static function MoveItemToUserFromCharacter($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/MoveItemToUserFromCharacter", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Informs the PlayFab match-making service that the user specified has left the Game Server Instance
    /// https://api.playfab.com/Documentation/Server/method/NotifyMatchmakerPlayerLeft
    /// </summary>
    public static function NotifyMatchmakerPlayerLeft($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/NotifyMatchmakerPlayerLeft", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds the virtual goods associated with the coupon to the user's inventory. Coupons can be generated  via the
    /// Economy->Catalogs tab in the PlayFab Game Manager.
    /// https://api.playfab.com/Documentation/Server/method/RedeemCoupon
    /// </summary>
    public static function RedeemCoupon($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RedeemCoupon", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Validates a Game Server session ticket and returns details about the user
    /// https://api.playfab.com/Documentation/Server/method/RedeemMatchmakerTicket
    /// </summary>
    public static function RedeemMatchmakerTicket($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RedeemMatchmakerTicket", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Set the state of the indicated Game Server Instance. Also update the heartbeat for the instance.
    /// https://api.playfab.com/Documentation/Server/method/RefreshGameServerInstanceHeartbeat
    /// </summary>
    public static function RefreshGameServerInstanceHeartbeat($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RefreshGameServerInstanceHeartbeat", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Inform the matchmaker that a new Game Server Instance is added.
    /// https://api.playfab.com/Documentation/Server/method/RegisterGame
    /// </summary>
    public static function RegisterGame($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RegisterGame", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Removes the specified friend from the the user's friend list
    /// https://api.playfab.com/Documentation/Server/method/RemoveFriend
    /// </summary>
    public static function RemoveFriend($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RemoveFriend", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Remove a given tag from a player profile. The tag's namespace is automatically generated based on the source of the tag.
    /// https://api.playfab.com/Documentation/Server/method/RemovePlayerTag
    /// </summary>
    public static function RemovePlayerTag($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RemovePlayerTag", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Removes users from the set of those able to update the shared data and the set of users in the group. Only users in the
    /// group can remove members. If as a result of the call, zero users remain with access, the group and its associated data
    /// will be deleted. Shared Groups are designed for sharing data between a very small number of players,  please see our
    /// guide: https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Server/method/RemoveSharedGroupMembers
    /// </summary>
    public static function RemoveSharedGroupMembers($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RemoveSharedGroupMembers", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Submit a report about a player (due to bad bahavior, etc.) on behalf of another player, so that customer service
    /// representatives for the title can take action concerning potentially toxic players.
    /// https://api.playfab.com/Documentation/Server/method/ReportPlayer
    /// </summary>
    public static function ReportPlayer($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/ReportPlayer", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Revoke all active bans for a user.
    /// https://api.playfab.com/Documentation/Server/method/RevokeAllBansForUser
    /// </summary>
    public static function RevokeAllBansForUser($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RevokeAllBansForUser", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Revoke all active bans specified with BanId.
    /// https://api.playfab.com/Documentation/Server/method/RevokeBans
    /// </summary>
    public static function RevokeBans($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RevokeBans", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Revokes access to an item in a user's inventory
    /// https://api.playfab.com/Documentation/Server/method/RevokeInventoryItem
    /// </summary>
    public static function RevokeInventoryItem($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/RevokeInventoryItem", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Forces an email to be sent to the registered contact email address for the user's account based on an account recovery
    /// email template
    /// https://api.playfab.com/Documentation/Server/method/SendCustomAccountRecoveryEmail
    /// </summary>
    public static function SendCustomAccountRecoveryEmail($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SendCustomAccountRecoveryEmail", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Sends an email based on an email template to a player's contact email
    /// https://api.playfab.com/Documentation/Server/method/SendEmailFromTemplate
    /// </summary>
    public static function SendEmailFromTemplate($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SendEmailFromTemplate", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Sends an iOS/Android Push Notification to a specific user, if that user's device has been configured for Push
    /// Notifications in PlayFab. If a user has linked both Android and iOS devices, both will be notified.
    /// https://api.playfab.com/Documentation/Server/method/SendPushNotification
    /// </summary>
    public static function SendPushNotification($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SendPushNotification", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the tag list for a specified user in the friend list of another user
    /// https://api.playfab.com/Documentation/Server/method/SetFriendTags
    /// </summary>
    public static function SetFriendTags($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetFriendTags", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Sets the custom data of the indicated Game Server Instance
    /// https://api.playfab.com/Documentation/Server/method/SetGameServerInstanceData
    /// </summary>
    public static function SetGameServerInstanceData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetGameServerInstanceData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Set the state of the indicated Game Server Instance.
    /// https://api.playfab.com/Documentation/Server/method/SetGameServerInstanceState
    /// </summary>
    public static function SetGameServerInstanceState($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetGameServerInstanceState", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Set custom tags for the specified Game Server Instance
    /// https://api.playfab.com/Documentation/Server/method/SetGameServerInstanceTags
    /// </summary>
    public static function SetGameServerInstanceTags($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetGameServerInstanceTags", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Sets the player's secret if it is not already set. Player secrets are used to sign API requests. To reset a player's
    /// secret use the Admin or Server API method SetPlayerSecret.
    /// https://api.playfab.com/Documentation/Server/method/SetPlayerSecret
    /// </summary>
    public static function SetPlayerSecret($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetPlayerSecret", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom publisher settings
    /// https://api.playfab.com/Documentation/Server/method/SetPublisherData
    /// </summary>
    public static function SetPublisherData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetPublisherData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom title settings
    /// https://api.playfab.com/Documentation/Server/method/SetTitleData
    /// </summary>
    public static function SetTitleData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetTitleData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the key-value store of custom title settings
    /// https://api.playfab.com/Documentation/Server/method/SetTitleInternalData
    /// </summary>
    public static function SetTitleInternalData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SetTitleInternalData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Decrements the character's balance of the specified virtual currency by the stated amount. It is possible to make a VC
    /// balance negative with this API.
    /// https://api.playfab.com/Documentation/Server/method/SubtractCharacterVirtualCurrency
    /// </summary>
    public static function SubtractCharacterVirtualCurrency($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SubtractCharacterVirtualCurrency", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Decrements the user's balance of the specified virtual currency by the stated amount. It is possible to make a VC
    /// balance negative with this API.
    /// https://api.playfab.com/Documentation/Server/method/SubtractUserVirtualCurrency
    /// </summary>
    public static function SubtractUserVirtualCurrency($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/SubtractUserVirtualCurrency", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Opens a specific container (ContainerItemInstanceId), with a specific key (KeyItemInstanceId, when required), and
    /// returns the contents of the opened container. If the container (and key when relevant) are consumable (RemainingUses >
    /// 0), their RemainingUses will be decremented, consistent with the operation of ConsumeItem.
    /// https://api.playfab.com/Documentation/Server/method/UnlockContainerInstance
    /// </summary>
    public static function UnlockContainerInstance($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UnlockContainerInstance", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Searches Player or Character inventory for any ItemInstance matching the given CatalogItemId, if necessary unlocks it
    /// using any appropriate key, and returns the contents of the opened container. If the container (and key when relevant)
    /// are consumable (RemainingUses > 0), their RemainingUses will be decremented, consistent with the operation of
    /// ConsumeItem.
    /// https://api.playfab.com/Documentation/Server/method/UnlockContainerItem
    /// </summary>
    public static function UnlockContainerItem($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UnlockContainerItem", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Update the avatar URL of the specified player
    /// https://api.playfab.com/Documentation/Server/method/UpdateAvatarUrl
    /// </summary>
    public static function UpdateAvatarUrl($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateAvatarUrl", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates information of a list of existing bans specified with Ban Ids.
    /// https://api.playfab.com/Documentation/Server/method/UpdateBans
    /// </summary>
    public static function UpdateBans($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateBans", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user's character which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateCharacterData
    /// </summary>
    public static function UpdateCharacterData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateCharacterData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user's character which cannot  be accessed by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateCharacterInternalData
    /// </summary>
    public static function UpdateCharacterInternalData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateCharacterInternalData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user's character which can only be read by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateCharacterReadOnlyData
    /// </summary>
    public static function UpdateCharacterReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateCharacterReadOnlyData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the values of the specified title-specific statistics for the specific character
    /// https://api.playfab.com/Documentation/Server/method/UpdateCharacterStatistics
    /// </summary>
    public static function UpdateCharacterStatistics($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateCharacterStatistics", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the values of the specified title-specific statistics for the user
    /// https://api.playfab.com/Documentation/Server/method/UpdatePlayerStatistics
    /// </summary>
    public static function UpdatePlayerStatistics($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdatePlayerStatistics", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Adds, updates, and removes data keys for a shared group object. If the permission is set to Public, all fields updated
    /// or added in this call will be readable by users not in the group. By default, data permissions are set to Private.
    /// Regardless of the permission setting, only members of the group (and the server) can update the data.  Shared Groups are
    /// designed for sharing data between a very small number of players, please see our guide:
    /// https://api.playfab.com/docs/tutorials/landing-players/shared-groups
    /// https://api.playfab.com/Documentation/Server/method/UpdateSharedGroupData
    /// </summary>
    public static function UpdateSharedGroupData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateSharedGroupData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateUserData
    /// </summary>
    public static function UpdateUserData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateUserInternalData
    /// </summary>
    public static function UpdateUserInternalData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserInternalData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the key-value pair data tagged to the specified item, which is read-only from the client.
    /// https://api.playfab.com/Documentation/Server/method/UpdateUserInventoryItemCustomData
    /// </summary>
    public static function UpdateUserInventoryItemCustomData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserInventoryItemCustomData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which is readable and writable by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateUserPublisherData
    /// </summary>
    public static function UpdateUserPublisherData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserPublisherData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which cannot be accessed by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateUserPublisherInternalData
    /// </summary>
    public static function UpdateUserPublisherInternalData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserPublisherInternalData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the publisher-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateUserPublisherReadOnlyData
    /// </summary>
    public static function UpdateUserPublisherReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserPublisherReadOnlyData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Updates the title-specific custom data for the user which can only be read by the client
    /// https://api.playfab.com/Documentation/Server/method/UpdateUserReadOnlyData
    /// </summary>
    public static function UpdateUserReadOnlyData($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/UpdateUserReadOnlyData", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Writes a character-based event into PlayStream.
    /// https://api.playfab.com/Documentation/Server/method/WriteCharacterEvent
    /// </summary>
    public static function WriteCharacterEvent($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/WriteCharacterEvent", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Writes a player-based event into PlayStream.
    /// https://api.playfab.com/Documentation/Server/method/WritePlayerEvent
    /// </summary>
    public static function WritePlayerEvent($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/WritePlayerEvent", $request, "X-SecretKey", $authValue);
        return $result;
    }

    /// <summary>
    /// Writes a title-based event into PlayStream.
    /// https://api.playfab.com/Documentation/Server/method/WriteTitleEvent
    /// </summary>
    public static function WriteTitleEvent($titleId, $authValue, $request)
    {
        //TODO: Check the devSecretKey

        $result = PlayFabHttp::MakeCurlApiCall($titleId, "/Server/WriteTitleEvent", $request, "X-SecretKey", $authValue);
        return $result;
    }

}
?>
