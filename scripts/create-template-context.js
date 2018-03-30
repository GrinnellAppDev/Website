module.exports = (data, partials) => {
    const members = {}
    for (const name in data.members) {
        const member = data.members[name]

        members[name] = {
            ...member,
            links: [member.link1, member.link2].filter(
                link => !!(link && link.url)
            ),
            name
        }
    }

    const memberSections = {}
    for (const name in members) {
        const member = members[name]

        if (!(member.type in memberSections)) {
            memberSections[member.type] = []
        }

        memberSections[member.type].push(member)
    }

    return {
        ...data,
        members,
        memberSections
    }
}
